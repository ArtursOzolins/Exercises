<?php

$person1 = new stdClass();
$person1->name = 'Karlis';
$person1->surname = 'Berzins';
$person1->age = '25';
$person1->birth = '19-04-1996';

$person2 = new stdClass();
$person2->name = 'Anna';
$person2->surname = 'Seile';
$person2->age = '21';
$person2->birth = '23-05-2000';

$personArray = [$person1, $person2];

foreach($personArray as $value) {
    echo "$value->name $value->surname ($value->age / $value->birth)" . PHP_EOL;
}
