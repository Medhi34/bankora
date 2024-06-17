<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incident;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $incidents = Incident::all();
        // return view('incidents.index', ['incidents' => $incidents]);
        return view('incidents.index', compact('incidents'));
    }
}
