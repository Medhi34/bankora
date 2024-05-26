<?php

declare(strict_types=1);

namespace App\Http\Controllers\Incident;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function search(Request $request): View
    {
        return view('incidents.search');
    }
}
