

<?php

require_once 'init.php';


$title = 'Главная страница';
$num = 2; //количество нговостей на странице

$resTotal = mysqli_query($link, "SELECT * FROM `news`");
$total = mysqli_num_rows($resTotal);
#pr($total); //количество записей в запрросе
$totalStr = ceil($total / $num); // общее число страниц
$page = intval($_GET['page']);  // получение номера страницы из адресной строки  intval() - приводит к числу

if($page <= 0){
    $page = 1;
}elseif ($page > $total){
    $page = $total;
}

$offset = $page * $num - $numl;

$res = mysqli_query($link, "SELECT n.`id`, n.`title`, n.`preview_text`, n.`date`, n.`image`, n.`comment_cnt`, c.`title` AS news_cat FROM `news` n JOIN `category` c ON c.`id` = n.`category_id` LIMIT 1, $num");
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
