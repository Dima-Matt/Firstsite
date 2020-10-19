

<?php

require_once 'init.php';


$title = 'Главная страница';

$res = mysqli_query($link, "SELECT n.`id`, n.`title`, n.`preview_text`, n.`date`, n.`image`, n.`comment_cnt`, c.`title` AS news_cat FROM `news` n JOIN `category` c ON c.`id` = n.`category_id`");
$arNews = mysqli_fetch_all($res, MYSQLI_ASSOC);

#pr($arNews);
$page_content = renderTemplate("main", [
    'arNews' => $arNews
]);

$result = renderTemplate('layout', [
'content' => $page_content,
'title' => 'Главная страница',
'arCategory' => $arCategory
]);

echo $result;









#require_once 'templates/layout.php';

$page_content = renderTemplate("main", [
    'arNews' => $arNews
]);

$res = renderTemplate('layout', [
                        'content' => $page_content, 
                        'title' => 'Главная страница',
                        'arCategory' => $arCategory
                        ]);
echo $res;
?>
