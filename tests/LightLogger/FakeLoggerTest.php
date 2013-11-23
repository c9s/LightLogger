<?php

class FakeLoggerTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $logger = new LightLogger\FakeLogger;
        ok($logger);
    }
}

