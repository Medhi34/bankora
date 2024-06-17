<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Enums\BankEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Incident;
use App\Http\Requests\Incident\StoreRequest;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function create(Request $request): View
    {
        return view('incidents.create', [
            'banks' => BankEnum::cases(),
        ]);
    }
}
