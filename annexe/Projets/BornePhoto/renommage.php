<?php
$dir_content = "D:\wamp64\www\BornePhoto\images";
$i=10;
$dir = scandir($dir_content);
 
foreach ($dir as $file){
    if ($file == '.' || $file == '..') continue;
    $array[0] = $i++ .".jpg";
/*    $fileName = implode('.',$array);*/
    @rename($dir_content.DIRECTORY_SEPARATOR.$file, $dir_content.DIRECTORY_SEPARATOR.$array[0]);
}
?>