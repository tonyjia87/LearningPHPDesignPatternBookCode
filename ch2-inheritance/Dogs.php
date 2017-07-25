<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/25
 * Time: 下午10:04
 */

include_once ('FurryPets.php');

class Dogs extends FurryPets
{
    function __construct()
    {
        echo "Dogs ".$this->fourlegs()."<br/>";
        echo $this->makeSound('Woof, woof')."<br/>";
        echo $this->guardsHourse()."<br/>";

    }

    private function guardsHourse()
    {
        return "Grrrr"."<br/>";
    }
}