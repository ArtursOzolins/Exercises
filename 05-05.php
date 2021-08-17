<?php

$fruitArray = [
    [
        'fruit'=>'banana',
        'weight'=>9
    ],[
        'fruit'=>'apple',
        'weight'=>85
    ]
];

function isItAboveTen(array $fruit): bool {
    return $fruit['weight'] >= 10;
}

$shippingCosts = [
    'Below 10kg'=>1,
    'Above 10kg'=>2
];

foreach ($fruitArray as $item) {
    if(isItAboveTen($item)) {
        $price = $item['weight'] * $shippingCosts['Above 10kg'];
        echo "{$item['fruit']} shipping costs: {$price}" . PHP_EOL;
    } else {
        $price = $item['weight'] * $shippingCosts['Below 10kg'];
        echo "{$item['fruit']} shipping costs: {$price}" . PHP_EOL;
    }
}


