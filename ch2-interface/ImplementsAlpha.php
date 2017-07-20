<?php

/**
 * Created by PhpStorm.
 * User: tonyjia87
 * Date: 2017/7/21
 * Time: 上午1:01
 */

include_once ('IMethodHolder.php');
class ImplementsAlpha implements IMethodHolder
{
    public function getInfo($info)
    {
        echo "THIS is NEWS".$info."<br>";
    }

    public function sendInfo($info)
    {
        return $info;
    }

    public function calculate($first, $second)
    {
        // TODO: Implement calcuate() method.
        $calulated = $first * $second;
        return $calulated;
    }

    public function useMethods()
    {
        $this->getInfo(("this sky falling ..."));
        echo $this->sendInfo("Vote for senator snort!")."<br>";
        echo "Yom make $".$this->calculate(20,15) . "in your part-time";
    }


}

$worker = new ImplementsAlpha();
$worker->useMethods();