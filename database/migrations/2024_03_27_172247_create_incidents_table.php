<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\BankEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();

            $table->string('account_name');
            $table->string('account_number')->unique();
            $table->string('account_address');
            $table->string('customer_number');
            $table->string('account_phone');
            $table->string('account_key');
            $table->float('account_balance');

            $table->string('bank_name');
            // $table->string('bank_name')->default(BankEnum::BANK_1->value);
            $table->string('bank_id')->unique();

            $table->string('agency_name');
            $table->string('agency_id')->unique();

            $table->string('transaction_number')->unique();
            $table->float('transaction_amount');
            $table->date('transaction_date');
            $table->string('transaction_recipient');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
