<?php

namespace Bazar\Proxies;

use Bazar\Contracts\Models\Cart as Contract;

class Cart extends Proxy
{
    /**
     * Get the proxied contract.
     *
     * @return string
     */
    public static function getProxiedContract(): string
    {
        return Contract::class;
    }
}
