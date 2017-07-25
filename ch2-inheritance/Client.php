<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/25
 * Time: 下午10:17
 */

include_once ("Dogs.php");
include_once ('Cats.php');

class Client
{
    function __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }

}

$worker = new Client();