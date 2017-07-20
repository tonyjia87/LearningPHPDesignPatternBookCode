<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/20
 * Time: 下午9:38
 */

ini_set('display_errors','1');
ERROR_REPORTING(E_ALL);

include_once ('MobilsSniffer.php');

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobilsSniffer();
        echo "Device = " . $this->mobSniff->findDevice();

        echo "Browser = ". $this->mobSniff->findBrowser();
    }
}

$trigger = new  Client();

