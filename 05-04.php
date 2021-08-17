<?php

$person1 = new stdClass();
$person1->name='Guntars';
$person1->surname='Rieksts';
$person1->age=17;

$person2 = new stdClass();
$person2->name='Liene';
$person2->surname='Liksma';
$person2->age=43;

$person3 = new stdClass();
$person3->name='Toms';
$person3->surname='Berzins';
$person3->age=9;


$personArray = [$person1, $person2, $person3];


function adultFinder(object $person): bool {
    return $person->age >= 18;
}


foreach ($personArray as $person) {
    if (adultFinder($person) === true) {
        echo "{$person->name} is an adult" . PHP_EOL;
    } else {
        echo "{$person->name} is not an adult" . PHP_EOL;
    }
}





