<?php if(!empty($arPage)): ?>
<p class="pages">
          <small><?=$curPage;?> из <?=$totalPage;?></small>

          <?foreach ($arPage as $nPage):?>

            <?if($curPage = = $nPage):?>  //если текущая страница
           <span><?=$nPage;?></span> //текущая страница
            <?else:?>
           <a href="?page=<?=$nPage;?>"><?=$nPage;?></a> //формируем ссылки на другие страницы
            <?endif;?>

          <?endforeach;?>
           <a href="#">&raquo;</a>
</p>

<?php endif;?>