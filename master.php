<?php
//include 'Pet.php';
class Master
{
    private $state = null;  //1010...10
    private $name = null;

    /**
     * @var $dog Pet
     * @var $item Thing
     * @var $plaсe Street
     */

    private $dog = null;  //собака человека
    private $item = null; //предмет
    private $plaсe = null; // место выгула

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
        //$this->dog->master = $this->name;
    }
    public function setItem($item)
    {
        $this->item = $item;
    }

    /****
     *  $street
     */
    public function setStreet($street)
    {
        $this->plaсe = $street;
    }
    public function getStreet(){
        return $this->plaсe->getName();
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
        return $this->plaсe->getName();
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
        $this->state = "Call dog";   //step 1
        //echo $this->state . PHP_EOL;
        $this->dog->GoTo($this);

        return $this->state;
    }


    private function useItem()
    {
        $Item_man = $this->getItemName();
        $dog_man = $this->getDogName();

        $this->state = "$this->name take $Item_man and puts on $dog_man";   //step 2 Берём поводок и надеваем на собаку
        //echo $this->state . PHP_EOL;

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


