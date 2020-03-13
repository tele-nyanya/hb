<?php
$login=$_GET["login"];
$pass=$_GET["pass"];
$fio=$_GET["FIO"];
$school=$_GET["school"];

$sql = "INSERT INTO user (login, pass, FIO, school_id) VALUES ('$login', '$pass', '$fio', '$school')";
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}