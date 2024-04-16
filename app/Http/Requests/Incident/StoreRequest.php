<?php

declare(strict_types=1);

namespace App\Http\Requests\Incident;

use App\Enums\BankEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
            'bank_name' => [
                'required',
                new Enum(
                    type: BankEnum::class
                ),
            ],
            'bank_id' => [
                'required',
                'size:5',
            ],

            'agency_name' => [
                'required',
                'min:5',
                'max:30',
            ],
            'agency_id' => [
                'required',
                'size:5',
            ],

            'account_name' => [
                'required',
                'min:5',
                'max:50',
            ],
            'account_number' => [
                'required',
                'size:11',
            ],
            'account_address' => [
                'required',
                'min:5',
                'max:30',
            ],
            'customer_number' => [
                'required',
                'size:10',
            ],
            'account_phone' => [
                'required',
                'size:9',
            ],
            'account_key' => [
                'required',
                'size:2',
            ],
            'account_balance' => [
                'required',
                'min:1',
                'max:15',
            ],

            'transaction_number' => [
                'required',
                'size:7',
            ],
            'transaction_amount' => [
                'required',
                'min:1',
                'max:15',
            ],
            'transaction_date' => [
                'required',
                'date_format:d-m-Y',
            ],
            'transaction_recipient' => [
                'required',
                'min:5',
                'max:50',
            ],
        ];
    }
}
