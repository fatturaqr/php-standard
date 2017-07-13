<?php

namespace Fatturaqr\PhpStandard;

use Javanile\Producer;
use Fatturaqr\PhpStandard\FatturaqrEngine;

final class FatturaqrEngine
{
    /**
     *
     */
    private $versionClasses = [
        'v1' => 'Fatturaqr\\PhpStandard\\Versions\\FatturaqrV1',
    ];

    /**
     *
     */
    public function encode($fattura, $version)
    {
        $versionClass  = $this->getVersionClass($version);
        $versionEngine = new $versionClass();

        return $versionEngine->encode($fattura);
    }

    /**
     *
     */
    public function decode($url)
    {
        $token = explode('/', $url);
        $versionClass  = $this->getVersionClass($token[3]);
        $versionEngine = new $versionClass();

        return $versionEngine->decode($url);
    }

    /**
     *
     */
    public function getVersionClass($version)
    {
        $version = strtolower(trim($version));

        if (!isset($this->versionClasses[$version])) {

        }

        return $this->versionClasses[$version];
    }
}
