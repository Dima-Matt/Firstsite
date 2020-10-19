<?php

require_once 'init.php';

$title = 'Поддержка';

$page_content = renderTemplate("support");

$result = renderTemplate('layout', [
'content' => $page_content,
'title' => $title,
'arCategory' => $arCategory
]);

echo $result;