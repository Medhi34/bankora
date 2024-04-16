<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Enums\BankEnum;
use App\Models\Incident;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('incidents.create', [
            'banks' => BankEnum::cases(),
        ]);
    }
}
