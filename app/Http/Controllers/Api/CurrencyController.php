<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurrencyResource;
use App\Services\CurrencyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{
    protected CurrencyService $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        $request->validate([
            'per_page' => 'nullable|numeric|min:1',
            'page' => 'nullable|numeric|min:1',
            'search' => 'nullable|string|max:255',
        ]);

        // get currencies
        $currencies = $this->currencyService->getAll($request, $request->per_page);
        $results = [
            'currencies' => CurrencyResource::collection($currencies)
        ];

        // handle pagination
        if ($request->per_page) {
            $results['per_page'] = $currencies->perPage();
            $results['current_page'] =  $currencies->currentPage();
            $results['last_page'] =  $currencies->lastPage();
            $results['total'] = $currencies->total();
        }

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.currencies')
            ]),
            'results' => $results
        ]);
    }

    /**
     * Get currency by uuid
     */
    public function get(Request $request, string $uuid): Response
    {
        // get currency
        $currency = $this->currencyService->getByUuid($uuid);

        // return
        return response([
            'message' => __('app.data_load_success', [
                'data' => __('app.currency')
            ]),
            'results' => [
                'currency' => new CurrencyResource($currency)
            ]
        ]);
    }
}
