<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un incident') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Message de réussite -->
                    @if (session()->has('message'))
                        <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('update', $incident->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="grid gap-6">
                            <div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3
                                            class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">
                                            INFORMATIONS DE LA BANQUE</h3>
                                    </div>
                                    <div class="p-6 grid gap-4">
                                        <div class="flex flex-col space-y-1.5">
                                            <x-input-label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                Nom de la banque :
                                            </x-input-label>
                                            <select name="bank_name" id="bank_name" type="button" role="combobox"
                                                aria-controls="radix-:R4qdqfnnja:" aria-expanded="false"
                                                aria-autocomplete="none" dir="ltr" data-state="closed"
                                                :value="old('bank_name', $incident->bank_name)" required autofocus 
                                                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                                                <option selected disabled>Sélectionnez une banque</option>
                                                <option value="Afriland First Bank">Afriland First Bank</option>
                                                <option value="Banque Atlantique">Banque Atlantique</option>
                                                <option value="BICEC">BICEC</option>
                                                <option value="Citibank NA Cameroun">Citibank NA Cameroun</option>
                                                <option value="Commercial Bank of Cameroon">Commercial Bank of Cameroon
                                                </option>
                                                <option value="Crédit Agricole SCB Cameroun">Crédit Agricole SCB
                                                    Cameroun</option>
                                                <option value="Ecobank Cameroun SA">Ecobank Cameroun SA</option>
                                                <option value="National Financial Credit">National Financial Credit
                                                </option>
                                                <option value="Standard Chartered Bank Cameroun">Standard Chartered Bank
                                                    Cameroun</option>
                                                <option value="Société Générale des Banques du Cameroun">Société
                                                    Générale des Banques du Cameroun</option>
                                                <option value="Union Bank of Cameroon">Union Bank of Cameroon</option>
                                                <option value="United Bank For Africa">United Bank For Africa</option>

                                                <x-input-error :messages="$errors->get('bank_name')" class="mt-2" />

                                                {{-- @foreach ($banks as $bank_name)
                                                    <option value="{{ $bank_name->value }}" @selected(old('bank_name',) === $bank_name->value)>
                                                        {{ $bank_name }}
                                                    </option>    
                                                @endforeach --}}


                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 opacity-50" aria-hidden="true">


                                                    <path d="m6 9 6 6 6-6">
                                                    </path>
                                                </svg>
                                            </select>
                                        </div>
                                        <div class="flex flex-col space-y-1.5">
                                            <x-input-label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                Code de la banque :
                                            </x-input-label>
                                            <input
                                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                id="bank_id" name="bank_id" placeholder="Code de la banque" :value="old('bank_id', $incident->bank_id)" required autofocus/>
                                            <x-input-error :messages="$errors->get('bank_id')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3
                                            class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">
                                            INFORMATIONS DE L'AGENCE
                                        </h3>
                                    </div>
                                    <div class="p-6 grid gap-4">
                                        <div class="flex flex-col space-y-1.5">
                                            <x-input-label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                Adresse de l'agence :
                                            </x-input-label>
                                            <input name="agency_name" id="agency_name"
                                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                placeholder="Adresse de l'agence" :value="old('agency_name', $incident->agency_name)" required autofocus/>
                                            <x-input-error :messages="$errors->get('agency_name')" class="mt-2" />
                                        </div>
                                        <div class="flex flex-col space-y-1.5">
                                            <x-input-label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                Code de l'agence :
                                            </x-input-label>
                                            <input name="agency_id" id="agency_id"
                                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                placeholder="Code de l'agence" :value="old('agency_id', $incident->agency_id)" required autofocus/>
                                            <x-input-error :messages="$errors->get('agency_id')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3
                                            class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">
                                            INFORMATIONS DU COMPTE</h3>
                                    </div>
                                    <div class="p-6 grid gap-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Nom ou Raison sociale :
                                                </x-input-label>
                                                <input name="account_name" id="account_name"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Nom ou Raison sociale" :value="old('account_name', $incident->account_name)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Numéro de compte :
                                                </x-input-label>
                                                <input name="account_number" id="account_number"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Numéro de compte" :value="old('account_number', $incident->account_number)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Clé du compte :
                                                </x-input-label>
                                                <input name="account_key" id="account_key"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Clé du compte" :value="old('account_key', $incident->account_key)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Solde du compte :
                                                </x-input-label>
                                                <input name="account_balance" id="account_balance"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Solde du compte" :value="old('account_balance', $incident->account_balance)" required autofocus/>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            {{-- <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Matricule du client :
                                                </x-input-label>
                                                <input
                                                    name="customer_number" id="customer_number" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Matricule du client"  :value="old('customer_number', $incident->customer_number)" required autofocus/>
                                            </div> --}}
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Adresse :
                                                </x-input-label>
                                                <input name="account_address"
                                                    id="account_address"class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Adresse" :value="old('account_address', $incident->account_address)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Téléphone :
                                                </x-input-label>
                                                <input name="account_phone" id="account_phone"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Téléphone" :value="old('account_phone', $incident->account_phone)" required autofocus/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="rounded-lg border bg-card text-card-foreground shadow-sm"
                                    data-v0-t="card">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3
                                            class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight">
                                            INFORMATIONS DE LA TRANSACTION
                                        </h3>
                                    </div>
                                    <div class="p-6 grid gap-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Numéro de la transaction :
                                                </x-input-label>
                                                <input name="transaction_number" id="transaction_number"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Numéro de la transaction" :value="old('transaction_number', $incident->transaction_number)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Montant de la transaction :
                                                </x-input-label>
                                                <input name="transaction_amount" id="transaction_amount"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Montant de la transaction" :value="old('transaction_amount', $incident->transaction_amount)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Date de la transaction :
                                                </x-input-label>
                                                <input name="transaction_date" id="transaction_date"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    type="date" :value="old('transaction_date', $incident->transaction_date)" required autofocus/>
                                            </div>
                                            <div class="flex flex-col space-y-1.5">
                                                <x-input-label
                                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                                    Bénéficiaire de la transaction :
                                                </x-input-label>
                                                <input name="transaction_recipient" id="transaction_recipient"
                                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                                    placeholder="Bénéficiaire de la transaction" :value="old('transaction_recipient', $incident->transaction_recipient)" required autofocus/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-4" style="text-align: center">
                                <x-primary-button class="ml-3">
                                    {{ __('SOUMETTRE') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
