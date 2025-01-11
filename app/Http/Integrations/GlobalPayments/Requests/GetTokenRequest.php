<?php

namespace App\Http\Integrations\GlobalPayments\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Http\Response;
use Log;

class GetTokenRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/accesstoken';
    }

    protected function defaultHeaders(): array
    {
        $headers = [
            'content-type' => 'application/json',
            'x-gp-version' => '2021-03-22',      
        ];

        return $headers;
    }

    protected function defaultBody(): array
    {
        $body = [
            'app_id' => config('services.globalpayments.app_id'),
            'nonce' => 'random_string',  
            'secret' =>hash("sha512", 'random_string'.config('services.globalpayments.secret')) ,
            'grant_type' => 'client_credentials',
            
        ];

        return $body;
    }

   
}
