<?php

namespace MehrAlsNix\Jacky\Tests;

use MehrAlsNix\Jacky\Databind\JsonMapper;
use MehrAlsNix\Jacky\Jacky;
use MehrAlsNix\Jacky\JsonFactory;
use PHPUnit_Framework_TestCase as TestCase;

class JackyTest extends TestCase
{
    /**
     * @test
     */
    public function instantiation()
    {
        $parser = new JsonFactory();
        $parser->getObjectMapper()->readStream(fopen(__DIR__ . '/../../composer.json', 'r'));
        $this->assertInstanceOf('MehrAlsNix\Jacky\Jacky', new Jacky());
    }
}
