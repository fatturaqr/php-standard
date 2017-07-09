<?php

namespace \\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use \\Php-standard;

Producer::addPsr4([
    '\\\' => __DIR__.'/../src',
    '\\\Tests\\' => __DIR__,
]);

final class Php-standardTest extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new Php-standard();
        $this->assertInstanceOf('\\\Php-standard', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
