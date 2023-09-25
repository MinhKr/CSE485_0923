<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];

//Lấy ra phần tử đầu tiên
echo "Phần tử đầu tiên của mảng " . reset($numbers) . "<br>";

//Lấy ra phần tử cuối cùng
echo "Phần tử cuối cùng của mảng " . end($numbers) . "<br>";

//Số lớn nhất
$maxNumber = 0;
foreach($numbers as $item){
    if ($item > $maxNumber){
        $maxNumber = $item ;
    }
}

echo "Số lớn nhất trong mảng là " . $maxNumber ."<br>";

//Số bé nhất
$minNumber = PHP_INT_MAX;
foreach($numbers as $item){
    if ($item < $minNumber){
        $minNumber = $item ;
    }
}

echo "Số bé nhất trong mảng là " . $minNumber ."<br>";

//Tổng
$total = 0;
foreach($numbers as $item){
    $total = $total + $item;
}

echo "Tổng các phần tử trong mảng là " . $total ."<br>";


