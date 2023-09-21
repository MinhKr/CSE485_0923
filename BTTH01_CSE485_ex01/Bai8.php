<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

//Longest String
$maxlength = 0;
$LongestString = "";

foreach ($array as $str) {
    $length = strlen($str);
    if($length > $maxlength){
        $maxlength = $length;
        $LongestString = $str;
    }
}

echo "Chuỗi lớn nhất là " . $LongestString . " , độ dài = " . $maxlength . "<br>";

//Shortest String
$minlength = PHP_INT_MAX;
$ShortestString = "";

foreach ($array as $str) {
    $length = strlen($str);
    if($length < $minlength){
        $minlength = $length;
        $ShortestString = $str;
    }
}

echo "Chuỗi lớn nhất là " . $ShortestString . " , độ dài = " . $minlength . "<br>";