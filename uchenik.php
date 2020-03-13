<?php
$classes = $_GET["id_class"];
$arr = [];
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$sql = "SELECT uchenik.id, uchenik.FIO FROM uchenik WHERE uchenik.class='$classes'";
$result = $mysqli->query($sql);
$i = 0;
while($row=$result->fetch_row())
{
    $middle = [];
    $middle["id"] = $row[0];
    $middle["fio"] = $row[1];
	$middle["class"] = $classes;
    $arr[$i] = $middle;
    $i++;
}
print_r(json_encode($arr));