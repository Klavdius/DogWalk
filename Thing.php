<?php

class Thing
{
    private $Name_item = null;

    public function __construct($name)
    {
        $this->Name_item = $name;
    }

    public function getName()
    {
        return $this->Name_item;
    }


}