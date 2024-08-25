<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccountTypeResource;
use App\Services\AccountTypeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccountTypeController extends Controller
{
    protected AccountTypeService $accountTypeService;

    public function __construct(AccountTypeService $accountTypeService)
    {
        $this->accountTypeService = $accountTypeService;
    }

    public function index(Request $request): Response
    {
        $request->validate([
            'per_page' => 'nullable|numeric|min:1',
            'page' => 'nullable|numeric|min:1',
            'search' => 'nullable|string|max:255',
        ]);

        // get account types
        $accountTypes = $this->accountTypeService->getAll($request, $request->per_page);
        $results = [
            'account_types' => AccountTypeResource::collection($accountTypes)
        ];

        // handle pagination
        if ($request->per_page) {
            $results['per_page'] = $accountTypes->perPage();
            $results['current_page'] =  $accountTypes->currentPage();
            $results['last_page'] =  $accountTypes->lastPage();
            $results['total'] = $accountTypes->total();
        }

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.account_types')
            ]),
            'results' => $results
        ]);
    }

    public function get(Request $request, string $uuid): Response
    {
        // get account type
        $accountType = $this->accountTypeService->getByUuid($uuid);

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.account_type')
            ]),
            'results' => [
                'account_type' => new AccountTypeResource($accountType)
            ]
        ]);
    }
}
