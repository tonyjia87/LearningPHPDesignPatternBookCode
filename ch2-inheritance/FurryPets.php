<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/25
 * Time: 下午9:58
 */
class FurryPets
{
    protected $sound;
    protected function fourlegs()
    {
        return "walk on all fours";
    }
    protected function makeSound($petNodise)
    {
        $this->sound = $petNodise;
        return $this->sound;
    }
}