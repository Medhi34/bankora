<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        // $totalIncidents = Incident::count();
        // $incidentsEnCours = Incident::where('statut', 'En cours')->count();
        // $totalTransactions = Transaction::count();
        // $montantTotal = Transaction::sum('montant');
        // $transactionsRecentes = Transaction::latest()->take(5)->get();

        // return view('dashboard', compact('totalIncidents', 'incidentsEnCours', 'totalTransactions', 'montantTotal', 'transactionsRecentes'));
    }
}
