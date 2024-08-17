<?php

namespace App\Services;

use App\Models\AccountType;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class AccountTypeService
{
    public function getAll(object $request, ?int $pagination = null): Collection|LengthAwarePaginator
    {
        $currencies = AccountType::orderBy('name')->where('active', 1);

        if ($request->search) {
            $search = $request->search;
            $currencies->where(function ($query) use ($search) {
                $query->where('code', 'LIKE', "%{$search}%")->orWhere('name', 'LIKE', "%{$search}%");
            });
        }

        return $pagination ? $currencies->paginate($pagination) : $currencies->get();
    }

    public function getByUuid(string $uuid): AccountType
    {
        $currency = AccountType::where([
            'active' => 1,
            'uuid' => $uuid
        ])->first();

        if (!$currency) {
            abort(404, __('app.data_not_found', [
                'data' => __('app.account_type')
            ]));
        }

        return $currency;
    }
}
