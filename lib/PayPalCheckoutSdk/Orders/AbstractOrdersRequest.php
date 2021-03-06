<?php

namespace PayPalCheckoutSdk\Orders;

use PayPalCheckoutSdk\Core\AbstractHttpRequest;

abstract class AbstractOrdersRequest extends AbstractHttpRequest
{

    /**
     * @inheritDoc
     */
    protected function possiblePrefix(): string
    {
        return '/v2/checkout/orders';
    }
}
