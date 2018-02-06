<?php
include_once('WordCounter.php');
$wc = new WordCounter("words.txt");
$wc->count(WordCounter::DESC);
