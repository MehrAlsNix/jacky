<?php

namespace MehrAlsNix\Jacky\Tests;

use MehrAlsNix\Jacky\Jacky;
use PHPUnit_Framework_TestCase as TestCase;

class JackyTest extends TestCase
{
    /**
     * @test
     */
    public function instantiation()
    {
        $this->assertInstanceOf('MehrAlsNix\Jacky\Jacky', new Jacky());
    }
}
