<?php

// 1
$a = 5;
$b = 10;

if ($a >= 0 && $b >= 0) {
    print('Разность: ' . ($a - $b));
}

if ($a < 0 && $b < 0) {
    print('Произведение: ' . ($a * $b));
}

if (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    print('Сумма: ' . ($a + $b));
}

// 2

$a = rand(0, 15);

switch ($a) {
    case 0:
        echo $a;
        break;
    case 1:
        echo $a;
        break;
    case 2:
        echo $a;
        break;
    case 3:
        echo $a;
        break;
    case 4:
        echo $a;
        break;
    case 5:
        echo $a;
        break;
    case 6:
        echo $a;
        break;
    case 7:
        echo $a;
        break;
    case 8:
        echo $a;
        break;
    case 9:
        echo $a;
        break;
    case 10:
        echo $a;
        break;
    case 11:
        echo $a;
        break;
    case 12:
        echo $a;
        break;
    case 13:
        echo $a;
        break;
    case 14:
        echo $a;
        break;
    case 15:
        echo $a;
        break;
}

