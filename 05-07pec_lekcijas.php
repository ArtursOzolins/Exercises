<?php

$requesterPerson = new stdClass ();
$requesterPerson->name = 'Bob';
$requesterPerson->validLicenseType = ['A', 'B', 'C'];
$requesterPerson->cash = 3500;


$gun1 = new stdClass();
$gun1->name = 'Colt.38';
$gun1->licenseType = 'A';
$gun1->price = 1200;

$gun2 = new stdClass();
$gun2->name = 'Glock Inc .45';
$gun2->licenseType = 'B';
$gun2->price = 1800;

$gun3 = new stdClass();
$gun3->name = 'AK-47';
$gun3->licenseType = 'F';
$gun3->price = 4800;

$gunStore = [
    1=>$gun1,
    2=>$gun2,
    3=>$gun3
];



foreach ($gunStore as $index => $gun) {
    echo "{$index} || {$gun->name} Required license: {$gun->licenseType} Price: {$gun->price}$" . PHP_EOL;
}

$selection = (int) readline('Choose your weapon:');


if (!isset($gunStore[$selection])) {
    echo 'Wrong slot'. PHP_EOL;
    exit;
}
$selectedWeapon = $gunStore[$selection];


if (in_array($selectedWeapon->licenseType, $requesterPerson->validLicenseType) && $selectedWeapon->price <= $requesterPerson->cash) {
    echo 'Customer can buy this weapon!'. PHP_EOL;
} else {
    echo 'Cannot buy weapon' . PHP_EOL;
}
