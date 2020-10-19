<?php
#require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require_once 'config.php';
require_once 'db.php';
require_once 'function.php';



$res = mysqli_query($link, "SELECT * FROM `category` ORDER BY `title` ASC");
$arCategory = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>