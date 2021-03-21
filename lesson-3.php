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

echo PHP_EOL;

// 4

function transliterate($value)
{
    $converter = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ь' => '',
        'ы' => 'y',
        'ъ' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ё' => 'E',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'Y',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'H',
        'Ц' => 'C',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Sch',
        'Ь' => '',
        'Ы' => 'Y',
        'Ъ' => '',
        'Э' => 'E',
        'Ю' => 'Yu',
        'Я' => 'Ya',
    ];

    return strtr($value, $converter);
}

echo transliterate('Тестовая строка. Проверка работы');

echo PHP_EOL;

// 5

function replaceSpaceToUnderscore($value)
{
    return str_replace(' ', '_', $value);
}

echo replaceSpaceToUnderscore('Проверка работы замены пробелов') . PHP_EOL;

echo PHP_EOL;

// 7

for ($i = 0; $i <= 9; print($i++)) {}

echo PHP_EOL;
echo PHP_EOL;

// 8

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
    echo $region;

    foreach ($cities as $key => $city) {
        if (!mb_strstr($city, 'К')) {
            unset($cities[$key]);
        }
    }

    if (!empty($cities)) {
        echo  PHP_EOL . implode(', ', $cities) . PHP_EOL;
    }
}

echo PHP_EOL;
echo PHP_EOL;

// 9

function generateUrlFromArticleName(string $articleName)
{
    $converter = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ь' => '',
        'ы' => 'y',
        'ъ' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ё' => 'E',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'Y',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'H',
        'Ц' => 'C',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Sch',
        'Ь' => '',
        'Ы' => 'Y',
        'Ъ' => '',
        'Э' => 'E',
        'Ю' => 'Yu',
        'Я' => 'Ya',
    ];

    return str_replace(' ', '_', strtr($articleName, $converter));
}

echo generateUrlFromArticleName('Моя шкодная кошка') . PHP_EOL;
