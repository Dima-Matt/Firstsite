<?php

require_once 'core/init.php';
?>

<?php

require_once 'core/init.php';


$title = 'Главная страница';
#$res = mysqli_querry($link, "SELECT * FROM `category` ORDER BY `title` ASC");
#$arCategory = mysqli_fetch_all($res, MYSQLI_ASSOC);


require_once 'templates/layout.php';
$page_content = renderTemplate("main");
$res = renderTemplate('layout', [
                        'content' => $page_content, 
                        'title' => 'Главная страница',
                        $'arCategory' => $arCategory
                        ]);
echo $res;
?>
