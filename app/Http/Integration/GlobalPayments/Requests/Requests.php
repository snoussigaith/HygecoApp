<?php

namespace App\Http\Integrations\GlobalPayments\Requests;

use App\Http\Integrations\Sirene\Connectors\SireneConnector;
use App\Http\Integration\GlobalPayments\Connecteur\GlobalPaymentsConnecteur;
use Saloon\Enums\Method;
use Saloon\Http\Request as SaloonRequest;
use Saloon\Traits\Request\HasConnector;

abstract class Request extends SaloonRequest
{
    use HasConnector;

    protected string $connector = GlobalPaymentsConnecteur::class;

    protected Method $method = Method::GET;

    abstract public function resolveEndpoint(): string;
}


