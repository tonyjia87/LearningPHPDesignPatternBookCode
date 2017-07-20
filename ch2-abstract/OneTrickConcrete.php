<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/21
 * Time: 上午12:39
 */
include_once ('OneTrickAbstract.php');

class OneTrickConcrete extends OneTrickAbstract
{
    public function  trick($whatever)
    {
        $this->storeHere = "an abstract property";
        return $whatever.$this->storeHere;
    }

    public function show($word)
    {
        return ('like');
    }
}

$worker = new OneTrickConcrete();
echo $worker->show("From an abstract origin ....");