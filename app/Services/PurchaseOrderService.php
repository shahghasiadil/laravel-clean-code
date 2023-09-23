<?php

namespace App\Services;

use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Collection;

class PurchaseOrderService
{
    /**
     * Retrieve all purchase orders, along with their associated payments and order items,
     * ordered by the most recent.
     */
    public function index(): Collection
    {
        return PurchaseOrder::with('payments', 'orderItems')->latest()->get();
    }

    /**
     * Create a new purchase order.
     */
    public function store(array $data): PurchaseOrder
    {
        return PurchaseOrder::create($data);
    }

    /**
     * Update an existing purchase order.
     */
    public function update(PurchaseOrder $order, array $data): bool
    {
        return $order->update($data);
    }

    /**
     * Delete a purchase order.
     */
    public function delete(PurchaseOrder $order): ?bool
    {
        return $order->delete();
    }
}
