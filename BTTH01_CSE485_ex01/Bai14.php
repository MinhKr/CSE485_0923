<?php
$array1 = [
    [77, 87],
    [23, 45]
   ];
$array2 = [
    'giá trị 1', 'giá trị 2'
   ];

$Result = [];

foreach ($array1 as $key => $values) {
    $mergedArray = array_merge([$array2[$key]], $values);
    $Result[] = $mergedArray;
}

echo '<pre>';
print_r($Result);
