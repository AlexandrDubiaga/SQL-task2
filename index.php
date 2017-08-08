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
/*$b = rand(1111, 9999);
$c = date("d.m.Y");*/
function generateName($length = 100){
$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
$numChars = strlen($chars);
$string = '';
for ($i = 0; $i < $length; $i++) {
$string .= substr($chars, rand(1, $numChars) - 1, 1);
}
return $string;
}
function generateDescription($length = 300){
$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
$numChars = strlen($chars);
$string = '';
for ($i = 0; $i < $length; $i++) {
$string .= substr($chars, rand(1, $numChars) - 1, 1);
}
return $string;
}


for($i = 0;$i<10;$i++)
{
  $query = mysql_query("INSERT INTO task2 VALUES ('$i','generateName(100)','generateDescription(300)')");
}
echo "Added";





?>
