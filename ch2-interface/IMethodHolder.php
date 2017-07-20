<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/21
 * Time: 上午12:58
 */
interface IMethodHolder
{
    public function getInfo($info);
    public function sendInfo($info);

    public function calculate($first,$second);

}