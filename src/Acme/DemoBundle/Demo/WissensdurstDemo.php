<?php
namespace Acme\DemoBundle\Demo;

class WissensdurstDemo
{
    public function myMethod()
    {
        $firstVariable  = 1024;
        $secondVariable = 1;
        for ($index = 0; $index < 10; $index++) {
            $secondVariable *= 2;
        }
        return $firstVariable == $secondVariable;
    }
}
