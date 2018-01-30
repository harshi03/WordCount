<?
	include_once("class.wordcounter.php");
	$wc = new WordCounter("words.txt");
	$wc->count(WordCounter::DESC);
?>
