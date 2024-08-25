<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uuid,
            'account_type' => new AccountTypeResource($this->account_type),
            'currency' => new CurrencyResource($this->currency),
            'name' => $this->name,
            'initial_balance' => $this->initial_balance,
            'initial_balance_text' => $this->initial_balance_text,
            'current_balance' => $this->current_balance,
            'current_balance_text' => $this->current_balance_text,
            'colour_code' => $this->colour_code,
            'active' => $this->active,
        ];
    }
}
