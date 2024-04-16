<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents = Incident::all();

        return view('incidents.index', compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incidents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'account_name' => 'required|max:50',
            'account_number' => 'required|max:11',
            'account_address' => 'required|max:50',
            'customer_number' => 'required|max:50',
            'account_phone' => 'required|max:9',
            'account_key' => 'required|max:2',
            'account_balance' => 'required|max:15',

            'agency_name' => 'required|max:20',
            'agency_id' => 'required|max:2',

            'bank_name' => 'required|max:30',
            'bank_id' => 'required|max:2',

            'transaction_number' => 'required|max:7',
            'transaction_amount' => 'required|max:15',
            'transaction_date' => 'required',
            'transaction_recipient' => 'required|max:50',
        ]);

        $incident = new Incident;

        $incident->account_name = $request->account_name;
        $incident->account_number = $request->account_number;
        $incident->account_address = $request->account_address;
        $incident->customer_number = $request->customer_number;
        $incident->account_phone = $request->account_phone;
        $incident->account_key = $request->account_key;
        $incident->account_balance = $request->account_balance;

        $incident->agency_name = $request->agency_name;
        $incident->agency_id = $request->agency_id;

        $incident->bank_name = $request->bank_name;
        $incident->bank_id = $request->bank_id;

        $incident->transaction_number = $request->transaction_number;
        $incident->transaction_amount = $request->transaction_amount;
        $incident->transaction_date = $request->transaction_date;
        $incident->transaction_recipient = $request->transaction_recipient;

        $incident->save();

        return back()->with('message', 'Incident bancaire créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incident $incident)
    {
        return view('incidents.show', compact('incident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incident $incident)
    {
        return view('incidents.update', compact('incident'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incident $incident)
    {
        $data = $request->validate([
            'account_name' => 'required|max:50',
            'account_number' => 'required|max:11',
            'account_address' => 'required|max:50',
            'customer_number' => 'required|max:50',
            'account_phone' => 'required|max:9',
            'account_key' => 'required|max:2',
            'account_balance' => 'required|max:15',

            'agency_name' => 'required|max:20',
            'agency_id' => 'required|max:2',

            'bank_name' => 'required|max:30',
            'bank_id' => 'required|max:2',

            'transaction_number' => 'required|max:7',
            'transaction_amount' => 'required|max:15',
            'transaction_date' => 'required',
            'transaction_recipient' => 'required|max:50',
        ]);

        $incident->account_name = $request->account_name;
        $incident->account_number = $request->account_number;
        $incident->account_address = $request->account_address;
        $incident->customer_number = $request->customer_number;
        $incident->account_phone = $request->account_phone;
        $incident->account_key = $request->account_key;
        $incident->account_balance = $request->account_balance;

        $incident->agency_name = $request->agency_name;
        $incident->agency_id = $request->agency_id;

        $incident->bank_name = $request->bank_name;
        $incident->bank_id = $request->bank_id;

        $incident->transaction_number = $request->transaction_number;
        $incident->transaction_amount = $request->transaction_amount;
        $incident->transaction_date = $request->transaction_date;
        $incident->transaction_recipient = $request->transaction_recipient;

        $incident->save();

        return back()->with('message', 'Incident bancaire modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incident $incident)
    {
        $incident->delete();
    }

    public function __invoke(Incident $incident)
    {
        return view('incidents.index');
    }
}
