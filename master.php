<?php
//include 'Pet.php';
class Master
{
    private $state = null;  //переменные класса приватны, и меняем мы их через публичные функции get set
    private $name = null;

    /**
     * @var $dog Pet
     * @var $item Thing
     * @var $plate Street
     */

    private $dog = null;  //собака человека
    private $item = null; //предмет
    private $plate = null; // место выгула

    public function __construct($name,$state)
    {
        $this->name = $name;
        $this->state = $state;

    }

    public function getState()
    {
        return $this->state;

    }

    public function getName()
    {
        return $this->name;
    }
    public function setDog($dog)    //знакомство с собакой
    {
        $this->dog = $dog;
    }
    public function setItem($random)
    {
        $this->item = $random;
    }

    /****
     *  $street
     */
    public function setStreet($street)
    {
        $this->plate = $street;
    }
    public function getStreet(){
        return $this->plate->getName();
    }
    /**
    *
     **/

    /**
     * запросы к хозяину
     */
    public function getDogName()
    {
        return $this->dog->getName();
    }
    public function getItemName()
    {
       return $this->item->getName();
    }
    public function getStreetName()
    {
        return $this->plate->getName();
    }
    public function Walk()
    {
        $this->collMyDog();
        //echo $this->state . PHP_EOL;
        $this->useItem();
        $this->dog->Happy();
        $this->exitHome();
        $this->dog->dogOnStreet();
        $this->EndWalk();
        $this->dog->Happy();
        }

    private function collMyDog()
    {
        $this->state = "$this->name Call dog";   //step 1
        echo $this->state . PHP_EOL;
        $this->dog->GoTo($this->name);

        return $this->state;
    }


    private function useItem()
    {
        $Item_man = $this->getItemName();
        $dog_man = $this->getDogName();
        $this->state = "$this->name take $Item_man and puts on $dog_man";   //step 2 Берём поводок и надеваем на собаку
        echo $this->state . PHP_EOL;

        return $this->state;
    }
    private function exitHome()
    {
        $dog_man = $this->getDogName();
        $place_walk = $this->getStreetName();
        $this->state = "$this->name and $dog_man exit from home on $place_walk street"; //step 3 Выходим с собакой на улицу для прогулки
        echo $this->state . PHP_EOL;
        return $this->state;
    }

    private function EndWalk()
    {
        $dogName = $this->dog->getName();
        $itemName = $this->item->getName();
        echo "$this->name waited while $dogName walks up and they went home" . PHP_EOL;
        echo "In house $this->name pull off $itemName from $dogName, and went to do my thing" . PHP_EOL;
        $this->state = "Goes home and removes the leash from the dog";  //step 4 погуляли и домой
        $this->dog->setAction("in Home 2");
        return $this->state;
    }

}


