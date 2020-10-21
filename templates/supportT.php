<?if(!empty($arSup)):?>
<?foreach($arSup as $sup):?>
<div class="article">
          <h2><span>Support to</span><?=$sup['title'];?></h2>
          <div class="clr"></div>
          <p><?=$sup['text'];?> <strong><?=$sup['text'];?></p>
          <p><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget bibendum tellus. Nunc vel imperdiet tellus. Mauris ornare aliquam urna, accumsan bibendum eros auctor ac.</p>
          <ul>
            <li class="block-question">
              <p class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="ans">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
            <li class="block-question">
              <p class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="ans">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
            <li class="block-question">
              <p class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="ans">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
            <li class="block-question">
              <p class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="ans">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
            <li class="block-question">
              <p class="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="ans">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
          </ul>

        </div>
      <?endforeach;?>

       <?else:?>
       <p>No support</p>
<?endif;?>