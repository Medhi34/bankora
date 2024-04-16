<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use App\Http\Requests\Incident\StoreRequest;
use App\DataObjects\IncidentDTO;
use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : void
    {
        dd(
            // Incident::create($request->validated());
            $request->all()
        );
        
    }
}
