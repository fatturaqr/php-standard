<?php

namespace Fatturaqr\PhpStandard\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Fatturaqr\PhpStandard\FatturaqrEngine;

Producer::addPsr4([
    'Fatturaqr\\PhpStandard\\' => __DIR__.'/../src',
    'Fatturaqr\\PhpStandard\\Tests\\' => __DIR__,
]);

final class FatturaqrV1Test extends TestCase
{
    public function testGeneric()
    {
        $engine = new FatturaqrEngine();

        $fattura = [
            'EmittenteId' => '10000000',
            'RiceventeId' => '20000000',
        ];

        $url = $engine->encode($fattura, 'V1');

        $decoded = $engine->decode($url);

        Producer::log($url);

        $this->assertEquals($fattura, $decoded);

    }
}
