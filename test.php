<?php  

ob_start()  //включили буферизацию

echo 'hello';

//$str = ob_get_contents();  //ВОЗВРАЩАЕТ  данные из буфера
$str = ob_end_clean(); //очищает буфер
echo $str;

?>