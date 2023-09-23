<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orderItems(): HasMany
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payments::class);
    }
}
