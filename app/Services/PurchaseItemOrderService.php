<?php

namespace App\Services;

use App\Models\PurchaseOrderItem;
use Illuminate\Database\Eloquent\Collection;

class PurchaseItemOrderService
{
    /**
     * Retrieve all purchase order items, along with their associated item and purchase order,
     * ordered by the most recent.
     */
    public function index(): Collection
    {
        return PurchaseOrderItem::with('item', 'purchaseOrder')->latest()->get();
    }

    /**
     * Create a new purchase order item.
     */
    public function store(array $data): PurchaseOrderItem
    {
        return PurchaseOrderItem::create($data);
    }

    /**
     * Update an existing purchase order item.
     */
    public function update(PurchaseOrderItem $item, array $data): bool
    {
        return $item->update($data);
    }

    /**
     * Delete a purchase order item.
     */
    public function delete(PurchaseOrderItem $item): ?bool
    {
        return $item->delete();
    }
}
