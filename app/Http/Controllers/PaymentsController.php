<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;
use App\Models\Payments;
use App\Services\PaymentService;

class PaymentsController extends Controller
{
    public function __construct(protected PaymentService $paymentService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Payments retrieved successfully',
            'data' => $this->paymentService->index(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentsRequest $request)
    {
        return response()->json([
            'message' => 'Payment created successfully',
            'data' => $this->paymentService->store($request->validated()),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentsRequest $request, Payments $payments)
    {
        return response()->json([
            'message' => 'Payment updated successfully',
            'data' => $this->paymentService->update($payments, $request->validated()),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payments $payments)
    {
        return response()->json([
            'message' => 'Payment deleted successfully',
            'data' => $this->paymentService->delete($payments),
        ]);
    }
}
