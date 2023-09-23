<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseOrderRequest;
use App\Http\Requests\UpdatePurchaseOrderRequest;
use App\Models\PurchaseOrder;
use App\Services\PurchaseOrderService;

class PurchaseOrderController extends Controller
{
    public function __construct(protected PurchaseOrderService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message' => 'Purchase Orders fetched successfully.', 'data' => $this->service->index()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseOrderRequest $request)
    {
        $data = $this->service->store($request->validated());

        return response()->json(['message' => 'Purchase Order created successfully.', 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder)
    {
        $data = $this->service->update($purchaseOrder, $request->validated());

        return response()->json(['message' => 'Purchase Order updated successfully.', 'data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        $data = $this->service->delete($purchaseOrder);

        return response()->json(['message' => 'Purchase Order deleted successfully.', 'data' => $data]);
    }
}
