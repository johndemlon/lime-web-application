<html>
<head>
<title>Lime</title>
</head>
<body>
<nav><center><button onclick="remove()">remove</button><button onclick="app()">apps</button><button onclick="themes()">themes</button></center><br></nav>
<center>ADMIN PANNEL</center><br>
<div id="app">
<center>
<?php $servername = "sql209.epizy.com";$username = "epiz_25762947";$password = "Gj2QepldlP";$dbname = "epiz_25762947_a";$conn = new mysqli($servername, $username, $password, $dbname);if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}$sql = "SELECT a, b, c FROM app";$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {


echo '<center>'.htmlspecialchars($row["a"], ENT_QUOTES, 'UTF-8').'</center><br><button onclick="'.str_replace(' ', '_', $row["a"])."_app".'()">download</button><div id="'.$row["a"]."_app".'"><center>'.htmlspecialchars($row["b"], ENT_QUOTES, 'UTF-8').'</center><br><center>'.htmlspecialchars($row["c"], ENT_QUOTES, 'UTF-8').'</center><br></div><br><script>
var x = document.getElementById("'.$row["a"]."_app".'");x.style.display = "none";function '.str_replace(' ', '_', $row["a"])."_app".'() {  var x = document.getElementById("'.$row["a"]."_app".'");  if (x.style.display === "none") {    x.style.display = "block";  } else {    x.style.display = "none";  }}</script>';


}} else {echo '<div id="main"><center>NO APPS</center><br></div>';}$conn->close();?></center><br>
</div>
<div id="themes">
<center>
<?php $servername = "sql209.epizy.com";$username = "epiz_25762947";$password = "Gj2QepldlP";$dbname = "epiz_25762947_a";$conn = new mysqli($servername, $username, $password, $dbname);if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}$sql = "SELECT a, b, c FROM app";$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {

echo '<center>'.htmlspecialchars($row["a"], ENT_QUOTES, 'UTF-8').'</center><br><button onclick="'.str_replace(' ', '_', $row["a"])."_thm".'()">download</button><div id="'.$row["a"]."_thm".'"><center>'.htmlspecialchars($row["b"], ENT_QUOTES, 'UTF-8').'</center><br><center>'.htmlspecialchars($row["c"], ENT_QUOTES, 'UTF-8').'</center><br></div><br><script>
var x = document.getElementById("'.$row["a"]."_thm".'");x.style.display = "none";function '.str_replace(' ', '_', $row["a"])."_thm".'() {  var x = document.getElementById("'.$row["a"]."_thm".'");  if (x.style.display === "none") {    x.style.display = "block";  } else {    x.style.display = "none";  }}</script>';

}} else {echo '<div id="main"><center>NO APPS</center><br></div>';}$conn->close();?></center><br>
</div>
<div id="remove">
<?php
function deleteDir($dirPath) {if (! is_dir($dirPath)) {throw new InvalidArgumentException("$dirPath must be a directory");}if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {$dirPath .= '/';}$files = glob($dirPath . '*', GLOB_MARK);foreach ($files as $file) {if (is_dir($file)) {deleteDir($file);} else {unlink($file);}}rmdir($dirPath);}
echo $_SERVER['DOCUMENT_ROOT'];
$files = glob('path/to/temp/{,.}*', GLOB_BRACE);
foreach($files as $file){
  if(is_file($file))
    unlink($file);
}
?>
</div>
<script>
var x = document.getElementById("app");
x.style.display = "none";

function app() {
  var x = document.getElementById("app");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("remove").style.display = "none";
document.getElementById("themes").style.display = "none";
  } else {
    x.style.display = "none";
    document.getElementById("remove").style.display = "none";
document.getElementById("themes").style.display = "none";
  }
}
</script>
<script>
var x = document.getElementById("themes");
x.style.display = "none";
function themes() {
  var x = document.getElementById("themes");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("remove").style.display = "none";
document.getElementById("app").style.display = "none";
  } else {
    x.style.display = "none";
    document.getElementById("remove").style.display = "none";
document.getElementById("app").style.display = "none";
  }
}
</script>
<script>
var x = document.getElementById("remove");
x.style.display = "none";

function remove() {
  var x = document.getElementById("remove");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("themes").style.display = "none";
document.getElementById("app").style.display = "none";
  } else {
    x.style.display = "none";
    document.getElementById("themes").style.display = "none";
document.getElementById("app").style.display = "none";
  }
}
</script>
<footer><center>email : a@u5u5.ml</center><br></footer>
</body>
</html>