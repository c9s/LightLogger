<?php

class ArrayLoggerTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $logger = new LightLogger\ArrayLogger;
        ok($logger);
    }
}

