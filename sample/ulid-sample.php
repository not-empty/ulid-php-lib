<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Ulid\Ulid;


print_r('Generate Ulids');
echo PHP_EOL;
$ulid = new Ulid();

$ulidFromTime = $ulid->generate(1585083964945);
echo 'ulid from time (1585083964945) = ' . $ulidFromTime . PHP_EOL;

$ulidFromNow = $ulid->generate();
echo 'ulid from now = ' . $ulidFromNow . PHP_EOL;

$invalid = $ulid->isValidFormat('1585083964945');
echo 'invalid format = ' . $invalid . PHP_EOL;

$valid = $ulid->isValidFormat('01E475VQGHA88VWQ4H22GQ3X3T');
echo 'valid format = ' . $valid . PHP_EOL;

$timeFromUlid = $ulid->getTimeFromUlid('01E48SD97BMWHAW82D229T0C7K');
echo 'get time from ulid (01E48SD97BMWHAW82D229T0C7K) = ' . $timeFromUlid . PHP_EOL;

$dateFromUlid = $ulid->getDateFromUlid('01E48SD97BMWHAW82D229T0C7K');
echo 'get date from ulid (01E48SD97BMWHAW82D229T0C7K) = ' . $dateFromUlid . PHP_EOL;

$randomnessFromUlid = $ulid->getRandomnessFromString('01E475VQGHNW990PVHXFDT4C6R');
echo 'get randomness from ulid (01E475VQGHNW990PVHXFDT4C6R) = ' . $randomnessFromUlid . PHP_EOL;
