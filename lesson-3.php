<?php

// 1

$i = 0;

while ($i < 100) {
    if ($i % 3 === 0) {
        echo $i . ' ' . PHP_EOL;
    }

    $i++;
}

echo PHP_EOL;

// 2

function checkNumberEven($number)
{
    if ($number === 0) {
        echo $number . ' - ноль' . PHP_EOL;
        return;
    }

    echo $number . ' - ' . ($number % 2 === 0 ? 'четное число' : 'нечетное число') . PHP_EOL;
}

$i = 0;

do {
    checkNumberEven($i);
    $i++;
} while ($i <= 10);

echo PHP_EOL;

// 3

$regions = [
    'Московская область:' => [
        'Москва',
        'Зеленоград',
        'Клин',
    ],
    'Ленинградская область:' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ],
    'Рязанская область:' => [
        'Рязань',
        'Сасово',
        'Скопин',
    ],
];

foreach ($regions as $region => $cities) {
    echo $region . PHP_EOL;
    echo implode(', ', $cities) . PHP_EOL;
}
