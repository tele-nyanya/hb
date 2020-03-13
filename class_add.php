<?php
$id_user=$GET["id_user"]
$number=$_GET["number"];
$kolvo_st=$_GET["kolvo_st"];


$sql1 = "INSERT INTO class (number,kolvo_st) VALUES ('$number', '$kolvo_st')";

//$sql2="INSERT INTO class_user (number,id_user) VALUES ('$number',$id_user')";
$mysqli = new mysqli("localhost", "root", "6086899", "hb") or die('Не могу выбрать базу данных');
$mysqli->query($sql1);
//$mysqli->query($sql2);
