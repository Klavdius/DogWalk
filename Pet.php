<?php
//include 'master.php';
class Pet
{
    /**
     * @var $master Master
     * @var $plate Street
     */
    private $status = "Dog In Home";
    private $name = null;
    private $action = null;
    private $street = null;
    private $master = null;


    /**
     * Pet constructor.
     * @param null $name
     */

    public function __construct($name,$action)  //получение имени и активности на создании
    {
        $this->name = $name;
        $this->action = $action;

    }

    public function getName()
    {
        return $this->name;         //узнать имя собаки
    }

    public function Happy()
    {
        echo "$this->name is HAPPY" . PHP_EOL;
        $this->status = "Happy";
    }


    public function setAction($move)
    {
        $this->action = $move;

    }
/**
 * Master name and street
 */
    public function setMaster($masterName)
    {
        $this->master = $masterName;

    }

    public function getMasterName(){
        echo "$this->name knows that his master $this->master" . PHP_EOL;
        return $this->master;
    }

    /**
     *  тест с if
     */
    public function dogOnStreet(){
        if ($this->street == null){
            $masterName = $this->master->getName();
            echo "$this->name do not remember where they live and asks $masterName" . PHP_EOL;
            $masterStreet = $this->master->getStreet();
            $this->street = $masterStreet; //не передать объект из объекта. собака знает только название. но не саму улицу...
            echo "$masterName says that on $masterStreet" . PHP_EOL;
        }else{
            echo "$this->name knows that street, and going to herb";
        }
        $this->action = "in go on street";
    }

    /**
     *
     *
     */

    public function GoTo($place)
    {
        $this->status = "$this->name Go to $place" . PHP_EOL;
        echo $this->status . PHP_EOL;
        return $this->status;
    }


}