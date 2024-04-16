<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\BankEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_number',
        'account_address',
        'customer_number',
        'account_phone',
        'account_key',
        'account_balance',

        'agency_name',
        'agency_id',

        'bank_name',
        'bank_id',

        'transaction_number',
        'transaction_amount',
        'transaction_date',
        'transaction_recipient',
    ];

    protected $casts = [
        'account_balance' => 'float',
        'account_key' => 'string',

        'agency_name' => 'string',
        'agency_id' => 'string',

        'bank_name' => BankEnum::class,
        // 'bank_name' => 'string',
        'bank_id' => 'string',

        'transaction_date' => 'date',
        'transaction_amount' => 'float',
    ];
}
