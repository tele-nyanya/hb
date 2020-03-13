<?php
session_start();
$id = $_SESSION["id"];
$arr = [];
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$sql = "SELECT id_class, number FROM class_user INNER JOIN class ON id_class=class.id WHERE id_user='$id'";
$result = $mysqli->query($sql);
$i = 0;
while($row=$result->fetch_row())
{
    $middle = [];
    $middle["id"] = $row[0];
    $middle["class"] = $row[1];
    $arr[$i] = $middle;
    $i++;
}
print_r(json_encode($arr));
