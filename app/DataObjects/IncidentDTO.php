<?php

declare(strict_types=1);

namespace App\DataObjects;

class IncidentDTO
{
    public function __construct(
        private readonly string $bank_id,
        private readonly string $bank_name,

        private readonly string $agency_name,
        private readonly string $agency_id,

        private readonly string $account_name,
        private readonly string $account_number,
        private readonly string $account_address,
        private readonly string $customer_number,
        private readonly string $account_phone,
        private readonly string $account_key,
        private readonly float $account_balance,

        private readonly string $transaction_number,
        private readonly float $transaction_amount,
        private readonly date $transaction_date,
        private readonly string $transaction_recipient,
        
    ) {
    }

    /**
     * @return array<string, int|string|bool|null>
     */
    // public function toArray(): array
    // {
    //     return [
    //         'bank_id' => $this->bank_id,
    //         'bank_name' => $this->bank_name,

    //         'agency_id' => $this->agency_id,
    //         'agency_name' => $this->agency_name,

    //         'account_name' => $this->account_name,
    //         'account_number' => $this->account_number,
    //         'account_address' => $this->account_address,
    //         'customer_number' => $this->customer_number,
    //         'account_phone' => $this->account_phone,
    //         'account_key' => $this->account_key,
    //         'account_balance' => $this->account_balance,

    //         'transaction_number' => $this->transaction_number,
    //         'transaction_amount' => $this->transaction_amount,
    //         'transaction_date' => $this->transaction_date,
    //         'transaction_recipient' => $this->transaction_recipient,
    //     ];
    // }
}
