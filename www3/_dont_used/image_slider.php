<?php
header('Content-Type: text/html; charset=utf-8', true);
$imgfile = "";
$clip  = $_REQUEST['clip'] ?? "";
if($clip){
    $dir = getcwd();
//    $file = str_replace("\\","/",substr(substr($dir, 0, strlen($dir)-3),0,strlen($dir)));
    $file = str_replace("\\","/",$dir);
    $imgfile = "{$file}/imslider_{$clip}.html";
    if(file_exists($imgfile)){
        echo file_get_contents($imgfile);
    }else{
        echo "<h2 style='color:#fff;'>Clip did not found</font>";
    }
}else{
    echo "<h2 style='color:#fff;'>Clip did not found</font>";
}
?>