<?php

namespace App\Http\Integration\GlobalPayments\Connecteur;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class GlobalPaymentsConnecteur extends Connector
{
    use AcceptsJson;

    public function resolveBaseUrl(): string
    {
        return config('services.globalpayments.base_url');
    }
}


