<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseOrderItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'item_id' => 'required|exists:items,id',
            'purchase_order_id' => 'required|exists:purchase_orders,id',
            'quantity' => 'required|min:0|not_in:0',
            'unit_price' => 'required|min:0|not_in:0',
        ];
    }
}
