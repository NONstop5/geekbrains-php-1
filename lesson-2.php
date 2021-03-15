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

echo PHP_EOL;

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

echo PHP_EOL;

// 3

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function subtract($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;
}

function division($arg1, $arg2) {
    return $arg1 / $arg2;
}

// 4

function mathOperation($arg1, $arg2, $operation) {
    $result = null;

    switch ($operation) {
        case '+':
            $result = sum($arg1, $arg2);
            break;
        case '-':
            $result = subtract($arg1, $arg2);
            break;
        case '*':
            $result = multiply($arg1, $arg2);
            break;
        case '/':
            $result = division($arg1, $arg2);
            break;
    }

    return $result;
}

echo mathOperation(5, 7, '+');

// 5

function power($val, $pow)
{
    if ($pow === 1) {
        return $val;
    }

    if ($pow > 1) {
        return $val * power($val, $pow - 1);
    }
}

echo power(2, 5);
