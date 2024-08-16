<?php

namespace App\Http\Integrations\GlobalPayments\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

class MakePaymentRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public string $token,
        public float $amount,
        public string $currency,
        public string $paymentMethod,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/payments';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultBody(): array
    {
        return [
            'amount' => $this->amount,
            'currency' => $this->currency,
            'paymentMethod' => $this->paymentMethod,
        ];
    }
}
