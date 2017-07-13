<?php

namespace Fatturaqr\PhpStandard\Versions;

final class FatturaqrV1
{
    /**
     *
     */
    private $schema = [
        'EmittenteId' => 'N',
        'RiceventeId' => 'N',
    ];

    /**
     *
     */
    public function encode($fattura)
    {
        $payload = $this->encodePayload($fattura);

        $url = 'http://ftqr.it/v1/'.$payload;

        return $url;
    }

    /**
     *
     */
    public function decode($url)
    {
        $token = explode('/', $url);

        return $this->decodePayload($token[4]);
    }

    /**
     *
     */
    public function encodePayload($fattura)
    {
        return json_encode($fattura);
    }

    /**
     *
     */
    public function decodePayload($payload)
    {
        return (array) json_decode($payload);
    }
}
