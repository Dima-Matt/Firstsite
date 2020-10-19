<?php

require_once 'init.php';

$title = 'Контакты';

$page_content = renderTemplate("contact");

$result = renderTemplate('layout', [
'content' => $page_content,
'title' => $title,
'arCategory' => $arCategory
]);

echo $result;