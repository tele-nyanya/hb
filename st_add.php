<?php
$FIO=$_GET["FIO"];
$school=$_GET["school"];
$class=$_GET["class"];

$sql = "INSERT INTO uchenik (FIO, school, class) VALUES ('$FIO', '$school', '$class')";
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$mysqli->query($sql);


