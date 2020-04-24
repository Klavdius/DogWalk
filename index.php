<?php
require_once "master.php";
require_once "Pet.php";
require_once "Thing.php";
require_once "Street.php";



$human = new Master('Bob','In home');
$dog = new Pet('Rex','in home');
$leash = new Thing('leash');
$street = new Street('Mainstreet');


$human->setDog($dog);
$dog->setMaster($human);
$human->setItem($leash);
$human->setStreet($street);
$human->getItemName();

$human->Walk();
//echo $human->getDogName();
echo "the end" . PHP_EOL;





//$Human->Walking();