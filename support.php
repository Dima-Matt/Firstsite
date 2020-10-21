<?php

require_once 'init.php';

$title = 'Поддержка';



$res = mysqli_query($link, "SELECT `title`, `text` FROM `support`");
$arSup = mysqli_fetch_all($res, MYSQLI_ASSOC);


$page_content = renderTemplate("support" [
                            'arSup' => $arSup

]);


$result = renderTemplate('layout', [
'content' => $page_content,
'title' => $title,
'arCategory' => $arCategory
]);

echo $result;