<?php
$a = [
    'a' => [
                'b' => 0,
                'c' => 1
         ],
    'b' => [
            'e' => 2,
            'o' => [
                    'b' => 3
                    ]
            ]
    ];

echo "<pre>";
print_r($a['b']['o']['b']);//Giá trị = 3 mà key = b

echo "<pre>";
print_r($a['a']['c']);//Giá trị = 1 mà key = c

echo "<pre>";
print_r($a['a']);//Thông tin các phần tử có key là a
