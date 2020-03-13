<?php
$id = $_GET["id"];
$mysqli = new mysqli("localhost", "root", "6086899", "hb");
$sql = "SELECT student.temp, uchenik.FIO, uchenik.school, uchenik.class FROM student INNER JOIN uchenik ON uchenik.id = student.st_id WHERE student.st_id='$id' ORDER BY student.date DESC, student.time DESC LIMIT 0,1";
$result = $mysqli->query($sql);
$middle = [];
while($row=$result->fetch_row())
{
    $middle["temp"] = $row[0];
    $middle["fio"] = $row[1];
	$middle["school"] = $row[2];
    $middle["class"] = $row[3];
}
print_r(json_encode($middle));