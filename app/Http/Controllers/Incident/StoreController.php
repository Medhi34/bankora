<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use App\Http\Requests\Incident\StoreRequest;
use App\Models\Incident;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $incident = Incident::create($validatedData);

        return response()->json(['message' => 'Incident enregistré avec succès!', 'data' => $incident]);

        // dd(
        //     $request->all()
        // );

    }
}
