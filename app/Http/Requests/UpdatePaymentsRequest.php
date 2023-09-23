<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentsRequest extends FormRequest
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
            'descriptions' => 'required|string',
            'vendor_name' => 'required|string|max:180',
            'payment_type' => 'required|string|in:cash,bank_transfer',
            'purchase_order_id' => 'required|exists:purchase_orders,id',
            'amount' => 'required|min:0|not_in:0',
        ];
    }
}
