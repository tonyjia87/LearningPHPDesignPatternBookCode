<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/20
 * Time: 下午9:18
 */
class MobilsSniffer
{
    private $userAgent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->userAgent = strtolower($this->userAgent);

        $this->device = array('iphone','ipad','android','silk','blackberry','touch','mac');
        $this->browser = array('firefox','chrome','opera','msie','safari', 'blackberry',
            'trident');
        $this->deviceLength = count($this->device);
        $this->browserLength = count($this->browser);

    }
//        strstr 字符串查找
//echo strstr("I love Shanghai!","Shanghai");
//返回 Shanghai
    public function findDevice()
    {
        for ($uaSniff = 0; $uaSniff < $this->deviceLength;$uaSniff ++ )
        {
            if (strstr($this->userAgent,$this->device[$uaSniff]))
            {
                return $this->device[$uaSniff];
            }

        }
        return 'not fond';
    }

    public function findBrowser()
    {
        for ($uaSniff = 0 ; $uaSniff < $this->browserLength ; $uaSniff ++)
        {
            if (strstr($this->userAgent,$this->browser[$uaSniff]))
            {
                return $this->browser[$uaSniff];
            }
        }
        return 'not fond';
    }
}
