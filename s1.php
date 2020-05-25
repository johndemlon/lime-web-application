<?php
function getUserIpAddr(){if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}else{$ip = $_SERVER['REMOTE_ADDR'];}return $ip;}
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
$a = getUserIpAddr();
$b = $_SERVER['HTTP_USER_AGENT'];
$c = $_SERVER['HTTP_REFERER'];
$d = date("Y-m-d");
$check=mysqli_query($conn,"SELECT a FROM b 
WHERE a='$a'");
if(mysqli_num_rows($check)>=1){
$check=mysqli_query($conn,"SELECT a FROM b WHERE b='$b'");
if(mysqli_num_rows($check)>=1){
}else{
$sql = "INSERT INTO b (a, b, c, d)
VALUES ('$a', '$b','$c', '$d')";
if ($conn->query($sql) === TRUE) {}
}
}else{
$c = $_SERVER['HTTP_REFERER'];
$d = date("Y-m-d");
$sql = "INSERT INTO b (a, b, c, d)
VALUES ('$a', '$b','$c', '$d')";
if ($conn->query($sql) === TRUE) {
}
}
$conn->close();
?>