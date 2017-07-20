<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/20
 * Time: 下午9:13
 */
class TellAll
{
    private $userAgent;

    public function __construct()
    {
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}

$tellAll = new TellAll();