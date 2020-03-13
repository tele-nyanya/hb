<?php
session_start();
if(isset($_SESSION["id"])){
print "Пользователь авторизован";
}
else{
    print "Совпадений не найдено";
}
session_unset();