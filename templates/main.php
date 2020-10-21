<?if(!empty($arNews)):?>


<?foreach($arNews as $news):?>
        <div class="article">
          <h2><?=$news['title'];?></h2>
          <div class="clr"></div>
          <p><span class="date"><?=$news['date'];?></span> Автор <a href="#">Admin</a> &nbsp;|&nbsp; Категория <a href="#"><?=$news['newc_cat'];?></a></p>
          <img src="images/<?=$nes['image']?>" width="625" height="205" alt="" />
          <p><?=$news['prewiew_text'];?></p>
          <p class="spec"><a href="news_detail.php?id=<?$news['id']?>" class="rm">Читать далее &raquo;</a> <a href="#" class="com"><span><?=$news['comment_cnt'];?></span> Комментариев</a></p>
        </div>
       
       <?=$navigation?>
 <?endforeach;?>
        
<?else:?>
  <p>Новостей нет</p>
<?endif;?>