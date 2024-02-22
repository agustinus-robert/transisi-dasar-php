<?php
$str = "Jakarta adalah ibukota negara Republik Indonesia";

$unigram = str_replace(" ",", ", $str);
$bigram = preg_replace('/(\w+ \w+)( )/', '$1, ', $str);
$trigram = preg_replace('/(\w+ \w+ \w+)( )/', '$1, ', $str);

echo 'String Unigram : '.$unigram."</br>";
echo 'String Bigram : '.$bigram."</br>";
echo 'String Trigram : '.$trigram."</br>";