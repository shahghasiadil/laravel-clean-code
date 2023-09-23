<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseOrderItemRequest;
use App\Http\Requests\UpdatePurchaseOrderItemRequest;
use App\Models\PurchaseOrderItem;
use App\Services\PurchaseItemOrderService;

class PurchaseOrderItemController extends Controller
{
    public function __construct(protected PurchaseItemOrderService $service)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Purchase Order Items retrieved successfully',
            'data' => $this->service->index(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseOrderItemRequest $request)
    {
        return response()->json([
            'message' => 'Purchase Order Item created successfully',
            'data' => $this->service->store($request->validated()),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseOrderItemRequest $request, PurchaseOrderItem $purchaseOrderItem)
    {
        return response()->json([
            'message' => 'Purchase Order Item updated successfully',
            'data' => $this->service->update($purchaseOrderItem, $request->validated()),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrderItem $purchaseOrderItem)
    {
        return response()->json([
            'message' => 'Purchase Order Item deleted successfully',
            'data' => $this->service->delete($purchaseOrderItem),
        ]);
    }
}
