<?php

namespace App\Http\Integrations\GlobalPayments\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasFormBody;

class GetTokenRequest extends Request implements HasBody
{
    use HasFormBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/token';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Authorization' => 'Basic ' . base64_encode(
                config('services.globalpayments.key') . ':' . config('services.globalpayments.secret')
            ),
        ];
    }

    protected function defaultBody(): array
    {
        return [
            'grant_type' => 'client_credentials',
        ];
    }
}