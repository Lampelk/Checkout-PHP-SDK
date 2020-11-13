<?php

namespace PayPalCheckoutSdk\Core;

use PayPalHttp\Injector;

class FPTIInstrumentationInjector implements Injector
{

    /**
     * @param $request
     */
    public function inject($request): void
    {
        $request->headers['sdk_name'] = 'Checkout SDK';
        $request->headers['sdk_version'] = '1.0.1';
        $request->headers['sdk_tech_stack'] = 'PHP ' . PHP_VERSION;
        $request->headers['api_integration_type'] = 'PAYPALSDK';
    }
}
