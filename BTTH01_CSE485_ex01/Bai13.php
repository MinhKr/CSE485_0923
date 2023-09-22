<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$tong = 0;
foreach($numbers as $item){
    $tong = $tong + $item;
}

$TrungBinh = $tong / count($numbers);

echo $TrungBinh . "<br>";

echo "Các giá trị lớn hơn giá trị trung bình là ";
foreach($numbers as $item){
    if($item > $TrungBinh){
        echo $item . " ";
    }
}
echo "<br>";
echo "Các giá trị nhỏ hơn giá trị trung bình là ";
foreach($numbers as $item){
    if($item < $TrungBinh){
        echo $item . " ";
    }
}
