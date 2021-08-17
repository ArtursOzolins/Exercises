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

$gunStore = [$gun1, $gun2, $gun3];



foreach ($gunStore as $gun) {
    if (in_array($gun->licenseType, $requesterPerson->validLicenseType)) {
        echo "{$requesterPerson->name} can buy {$gun->name}" . PHP_EOL;
    }
}

echo array_search($gun->licenseType, $requesterPerson->validLicenseType);
