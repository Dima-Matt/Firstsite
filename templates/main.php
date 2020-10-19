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
       
        <p class="pages">
          <small>Страница 1 из 2 &nbsp;&nbsp;&nbsp;</small>
           <span>1</span> 
           <a href="#">2</a> 
           <a href="#">&raquo;</a>
          </p>
 <?endforeach;?>
        
<?else:?>
  <p>Новостей нет</p>
<?endif;?>