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
    public function store(StoreRequest $request): RedirectResponse
    {
        $request->validate([
            'account_name' => 'required|min:5|max:50',
            'account_number' => 'required|size:11',
            'account_address' => 'required|min:5|max:50',
            'customer_number' => 'required|size:10',
            'account_phone' => 'required|size:9',
            'account_key' => 'required|size:2',
            'account_balance' => 'required|min:1|max:15',

            'agency_name' => 'required|min:5|max:30',
            'agency_id' => 'required|size:5',

            'bank_name' => 'required',
            'bank_id' => 'required|size:5',

            'transaction_number' => 'required|size:7',
            'transaction_amount' => 'required|min:1|max:15',
            'transaction_date' => 'required|date_format:d-m-Y',
            'transaction_recipient' => 'required|min:5|max:50',
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

        // return back()->with('message', 'Incident bancaire créé avec succès !');
        return redirect()
            ->route('incidents.index')
            ->with('message','Incident has been created successfully.');
            
        // $validatedData = $request->validated();
        // $incident = Incident::create($validatedData);
        // $incident -> save();

        // return response()->json(['message' => 'Incident enregistré avec succès!', 'data' => $incident]);

        // dd(
        //     $request->all()
        // );

    }
}
