<?php


class Street
{
    private $Name_street = null;

    public function __construct($name)
    {
        $this->Name_street = $name;
    }

    public function getName()
    {
        return $this->Name_street;
    }
}