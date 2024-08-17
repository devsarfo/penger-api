<?php

namespace App\Services;

use App\Models\AccountType;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class AccountTypeService
{
    public function getAll(object $request, ?int $pagination = null): Collection|LengthAwarePaginator
    {
        $accountTypes = AccountType::orderBy('name')->where('active', 1);

        if ($request->search) {
            $search = $request->search;
            $accountTypes->where(function ($query) use ($search) {
                $query->where('code', 'LIKE', "%{$search}%")->orWhere('name', 'LIKE', "%{$search}%");
            });
        }

        return $pagination ? $accountTypes->paginate($pagination) : $accountTypes->get();
    }

    public function getByUuid(string $uuid): AccountType
    {
        $accountType = AccountType::where([
            'active' => 1,
            'uuid' => $uuid
        ])->first();

        if (!$accountType) {
            abort(404, __('app.data_not_found', [
                'data' => __('app.account_type')
            ]));
        }

        return $accountType;
    }
}
