<?php
$array = array(1, 2, 3, 4, 5);

echo "Mảng ban đầu: " ;
print_r($array);
echo '<br>';


unset($array[2]);

//Đảm bảo mảng được sắp xếp theo key
$array = array_values($array);



echo "Mảng sau khi được xoá: " ;
print_r($array);
