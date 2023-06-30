<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'payload' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
