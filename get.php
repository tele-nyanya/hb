<?php
$st_id = $_GET["st_id"];
$temp = $_GET["temp"];
$pulse = $_GET["pulse"];
$date = date("Y-m-d");
$time = date("H:i:s");

$mysqli = new mysqli("localhost", "root", "6086899", "hb");
$mysqli->set_charset("utf8");
$sql = "INSERT INTO student (temp, pulse, st_id, date, time) VALUES ('$temp', '$pulse','$st_id', '$date', '$time')";
$result = $mysqli->query($sql);
echo "Error: " . $sql . "<br>" . $mysqli->error;


