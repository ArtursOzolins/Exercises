<?php


$person = new stdClass();
$person->name='Guntars';
$person->surname='Dzintars';
$person->age=18;

function adultFinder(object $person): bool {
    return $person->age >= 18;
}

if (adultFinder($person) === true) {
    echo "{$person->name} is an adult";
} else {
    echo "{$person->name} is not an adult";
}
