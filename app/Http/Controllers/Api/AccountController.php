<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use App\Services\AccountService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccountController extends Controller
{
    protected AccountService $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'per_page' => 'nullable|numeric|min:1',
            'page' => 'nullable|numeric|min:1',
            'search' => 'nullable|string|max:255',
        ]);

        // get accounts
        $user = auth()->user();
        $accounts = $this->accountService->getAccountsByUser($user, $request);

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.accounts')
            ]),
            'results' => [
                'accounts' => AccountResource::collection($accounts)
            ]
        ]);
    }

    /**
     * Get Account Endpoint
     */
    public function get(Request $request, $id)
    {
        // get account
        $user = auth()->user();
        $account = $this->accountService->getAccountByUserUuid($user, $id);

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.account')
            ]),
            'results' => [
                'account' => new AccountResource($account)
            ]
        ]);
    }

    /**
     * Create Account Endpoint
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'account_type' => 'required|exists:account_types,uuid',
            'currency' => 'required|exists:currencies,uuid',
            'name' => 'required|max:255',
            'initial_balance' => 'required|numeric',
            'colour_code' => 'nullable|max:255',
        ]);

        $user = auth()->user();
        $account = $this->accountService->create($user, $request);

        // return
        return response([
            'message' => __('app.data_create_success', [
                'data' => __('app.account')
            ]),
            'results' => [
                'account' => new AccountResource($account)
            ]
        ]);
    }

    /**
     * Update Account Endpoint
     */
    public function update(Request $request, $id): Response
    {
        $request->validate([
            'account_type' => 'required|exists:account_types,uuid',
            'name' => 'required|max:255',
            'initial_balance' => 'required|numeric',
            'colour_code' => 'nullable|max:255',
            'active' => 'nullable|boolean',
        ]);

        $user = auth()->user();
        $account = $this->accountService->getAccountByUserUuid($user, $id);

        $account = $this->accountService->update($account, $request);

        // return
        return response([
            'message' => __('app.data_update_success', [
                'data' => __('app.account')
            ]),
            'results' => [
                'account' => new AccountResource($account)
            ]
        ]);
    }

    /**
     * Delete Account Endpoint
     */
    public function delete(Request $request, $id)
    {
        // get account
        $user = auth()->user();
        $account = $this->accountService->getAccountByUserUuid($user, $id);

        // delete
        $result = $this->accountService->delete($account);
        if (!$result) {
            abort(500, __('app.data_delete_error', [
                'data' => __('app.account')
            ]));
        }

        // return
        return response([
            'message' => __('app.data_delete_success', [
                'data' => __('app.account')
            ])
        ]);
    }
}
