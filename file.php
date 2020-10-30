<?php

//file（）读取文件存数组
$a = file('readme.txt');
foreach($a as $line => $content){
    echo 'line '.($line + 1).':'.$content;
    echo '<br>';
}

echo '<br>';
echo '<br>';
//逐行读取文件

$handle = fopen('readme.txt', 'r');
while(!feof($handle)){
    echo fgets($handle, 1024);
    echo '<br>';
}
fclose($handle);
