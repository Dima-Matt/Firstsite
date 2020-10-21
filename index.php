

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
}elseif ($page > $totalStr){
    $page = $totalStr;
}

$offset = $page * $num - $numl; //с какой новости начинать

$res = mysqli_query($link, "SELECT n.`id`, n.`title`, n.`preview_text`, n.`date`, n.`image`, n.`comment_cnt`, c.`title` AS news_cat FROM `news` n JOIN `category` c ON c.`id` = n.`category_id` ORDER BY n.`id` LIMIT $offset, $num");
$arNews = mysqli_fetch_all($res, MYSQLI_ASSOC);
$arPage = range(1, $totalStr); //  массив со страницами [1,2,3]

$pageNavigation = renderTemplate('navigation', [
                                    'arPage' => $arPage,    // передаем массив со страницами
                                    'totalPage' => $totalStr,  //передаем количество страниц
                                    'curPage' => $page         //текущая страница
                                    ]);

#pr($arNews);
$page_content = renderTemplate("main", [  //получаем html шаблона main
    'arNews' => $arNews,                  // передаем массив с новостями из базы
    'navigation' => $navigation           // передаем полученный html код навигпции
]);

$result = renderTemplate('layout', [
'content' => $page_content,
'title' => 'Главная страница',
'arCategory' => $arCategory      //получили из базы
]);

echo $result;

pr($arSup);







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
