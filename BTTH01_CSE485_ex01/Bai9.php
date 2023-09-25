<?php
$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];

function LowercaseArray($str){
    return strtolower($str);
}


$Lowarrs1 = array_map("LowercaseArray" , $arrs1);
$Lowarrs2 = array_map("LowercaseArray" , $arrs2);

echo '<pre>';
print_r($Lowarrs1) . "<br>";
print_r($Lowarrs2) . "<br>";