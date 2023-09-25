<?php
$arrs1 = ['1', 'b', 'c', 'e'];
$arrs2 = ['a', 0, null, false];

function UppercaseArray($str){
    return strtoupper($str);
}


$Uparrs1 = array_map("UppercaseArray" , $arrs1);
$Uparrs2 = array_map("UppercaseArray" , $arrs2);

echo '<pre>';
print_r($Uparrs1) . "<br>";
print_r($Uparrs2) . "<br>";