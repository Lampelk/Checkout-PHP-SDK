<?php

namespace PayPalCheckoutSdk\Core;

use PayPalHttp\Environment;

abstract class PayPalEnvironment implements Environment
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(string $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function authorizationString(): string
    {
        return base64_encode($this->clientId . ':' . $this->clientSecret);
    }
}
