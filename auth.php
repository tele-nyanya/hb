<?php
$login=$_GET["login"];
$pass=$_GET["password"];
//$fio=$_GET["fio"];
//$school=$_GET["school"];

$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$sql = " SELECT DISTINCT id FROM user WHERE login='$login' AND pass='$pass'";
$result = $mysqli->query($sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
    echo "0";
}
else
{
    session_start();
    $_SESSION["id"]=$result->fetch_row()[0];
    echo "1";
}