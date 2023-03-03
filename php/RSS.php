<?php
$url="https://www.jeuxactu.com/rss/news.rss";
$tab=json_decode(json_encode(simplexml_load_file($url)),true);
print_r($tab['channel']);
?>