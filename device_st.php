<?php
$device_id=$_GET["device_id"];
$st_id=$_GET["st_id"];

$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$sql="INSERT INTO device