<?php

namespace \\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use \\;

Producer::addPsr4([
    '\\\' => __DIR__.'/../src',
    '\\\Tests\\' => __DIR__,
]);

final class Test extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new ();
        $this->assertInstanceOf('\\\', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
