<?php
require_once "master.php";
require_once "Pet.php";
require_once "Thing.php";
require_once "Street.php";
require_once "Oracul.php";



$human = new Master('Bob','In home');
$dog = new Pet('Rex','in home');
$leash = new Thing('leash');
$street = new Street('Mainstreet');
$oracul = new Oracul();



$human->setDog($dog);
$dog->setMaster($human);
$human->setItem($leash);
$human->setStreet($street);
$human->getItemName();



$oracul->setMaster($human);
$oracul->setPet($dog);


$dog->setOracul($oracul);
//$human->Walk();
//echo $human->getDogName();
echo "the end" . PHP_EOL;





//$Human->Walking();