<?php
$user = "user2";
$dB = "user2";
$host = "localhost";
$password = "tuser2";
$conn = mysql_connect($host, $user, $password);
if(mysql_select_db($dB))
{
  echo "Connect<br>";
}
else die ("Cant connect to db");
  




?>
