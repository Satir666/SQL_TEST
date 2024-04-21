<?php

$servername = "sql11.freemysqlhosting.net";
$username = "sql11700649";
$password = "KMsCLmwY7u";
$dbname = "sql11700649";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ID = $_POST['name1'];
  $Name = $_POST['name2'];
  $Subname = $_POST['name3'];

  $con = mysqli_connect($servername, $username, $password, $dbname);
  if(mysqli_connect_errno)  
  {
    print "<p style='color: red'>Произошла ошибка!</p>";
  }
}
?>
