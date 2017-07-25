<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/25
 * Time: 下午10:08
 */

include_once ('FurryPets.php');

class Cats extends FurryPets
{
    function __construct()
    {
        echo "Cats ".$this->fourlegs()."<br/>";
        echo $this->makeSound('Meow, purr')."<br/>";
        echo $this->ownsHouse()."<br/>";

    }

    private function ownsHouse()
    {
        return "I `ll just walk on this keyboard"."<br/>";
    }
}