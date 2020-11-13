<?php

namespace PayPalCheckoutSdk\Core;

use PayPalHttp\HttpRequest;

class RefreshTokenRequest extends HttpRequest
{

    /**
     * @param PayPalEnvironment $environment
     * @param string $authorizationCode
     */
    public function __construct(PayPalEnvironment $environment, string $authorizationCode)
    {
        parent::__construct('/v1/identity/openidconnect/tokenservice', 'POST');

        $this->headers['Authorization'] = 'Basic ' . $environment->authorizationString();
        $this->headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $this->body = [
            'grant_type' => 'authorization_code',
            'code' => $authorizationCode,
        ];
    }
}
