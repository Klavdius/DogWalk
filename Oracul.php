<?php


class Oracul
{
    /**
     * @var $master Master
     * @var $pet Pet
     */
    private $master = null;
    private $pet = null;

    public function setMaster($master){
        $this->master = $master;
    }
    public function setPet($pet){
        $this->pet = $pet;
    }
    public function voice($who,$what){
        switch ($who){
            case "$this->master":
                $word = $this->manSay($what);
                echo "$word" . PHP_EOL;
                break;
            case "$this->pet":
                $word = $this->dogSay($what);
                echo "$word" . PHP_EOL;
                break;
            default: echo 'not' . PHP_EOL;
        }
    }

    private function manSay($what){
        switch ($what){
            case '1':
                return $what = "He is at home";
                break;
            case '3':
                return $what = "He is at home with a dog";
                break;
            case '5':
                return $what = "he walks with a dog";
                break;
            default: echo 'silence' . PHP_EOL;
        }
    }

    private function dogSay($what){
        switch ($what){
            case '1':
                return $what = "He is at home";
                break;
            case '3':
                return $what = "He is at home with a dog";
                break;
            case '7':
                return $what = "he walks with a dog";
                break;
            case '14':
                return $what = "14";
                break;
            case '30':
                return $what = "30";
                break;
            default: echo 'silence' . PHP_EOL;
        }
    }
}