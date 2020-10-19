<?php

require_once 'init.php';

$title = 'О нас';

$page_content = renderTemplate("about");

$result = renderTemplate('layout', [
'content' => $page_content,
'title' => $title,
'arCategory' => $arCategory
]);

echo $result;

