<?php
header('Content-Type: text/html; charset=utf-8');
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM student") or die('Не могу выбрать базу ых');
while($row=$result->fetch_row())
{
    for ($i=0;$i<6;$i++) {
        echo $row[$i];
        echo "&nbsp";
    }
    echo '<br>';
}
