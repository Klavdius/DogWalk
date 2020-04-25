<?php
//include 'master.php';
class Pet
{
    /**
     * @var $master Master
     * @var $plate Street
     * @var $oracul Oracul
     */
    private $state = 0;
    private $name = null;
    private $action = null;
    private $street = null;
    private $master = null;
    private $oracul = null;


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
        $this->state = "Happy";
    }

    public function setOracul($oracul){
        $this->oracul = $oracul;
        $this->state = $this->state ^ 1 << 0;
        $this->state = $this->state ^ 1 << 2;
        $this->oracul->voice($this,$this->state);
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
     *  test if
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

    public function GoTo($man)
    {
        if($man == $this->master){
            $this->state = 1;
        }

        //echo $this->state . PHP_EOL;
        return $this->state;
    }


}