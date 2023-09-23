<?php

namespace App\Services;

use App\Models\Payments;
use Illuminate\Database\Eloquent\Collection;

class PaymentService
{
    /**
     * Retrieve all payments, along with their associated purchase orders,
     * ordered by the most recent.
     */
    public function index(): Collection
    {
        return Payments::with('purchaseOrder')->latest()->get();
    }

    /**
     * Create a new payment.
     */
    public function store(array $data): Payments
    {
        return Payments::create($data);
    }

    /**
     * Update an existing payment.
     */
    public function update(Payments $payments, array $data): bool
    {
        return $payments->update($data);
    }

    /**
     * Delete a payment.
     */
    public function delete(Payments $payments): ?bool
    {
        return $payments->delete();
    }
}
