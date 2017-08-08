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
function generatePassword($length = 100){
$chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
$numChars = strlen($chars);
$string = '';
for ($i = 0; $i < $length; $i++) {
$string .= substr($chars, rand(1, $numChars) - 1, 1);
}
return $string;
}

echo "Пароль из 8 символов: " . generatePassword(100) . "n";

/*
$query = mysql_query("INSERT INTO table (a,b,c) VALUES ($a,$b,$c)");
}*/




?>
