<?php

namespace App\Http\Integrations\GlobalPayments\Requests;

class GetGpRequest extends Request
{
    public function __construct(
        public string $token,
        public string $siret,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/entreprises/sirene/V3.11/siret/{$this->siret}";
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $this->token,
        ];
    }
}