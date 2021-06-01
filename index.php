<?php

include ('SimpleImage.php');

$imageClass = new SimpleImage();

$dir = '1';

$files = scandir($dir);

foreach ($files as $file) {
    if(is_file("$dir/$file") && filesize("$dir/$file") >= 377182 && (preg_match('/.*\.jpg$/', $file) || preg_match('/.*\.png$/', $file) )){
        $imageClass->load("$dir/$file");
        $imageClass->resizeToWidth(1200);
        $imageClass->save("$dir/$file");
    }
}


