<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Lire un incident bancaire')
        </h2>
    </x-slot>

    <x-tasks-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Nom de la banque')</h3>
        <p>{{ $incident->bank_name }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Code de la banque')</h3>
        <p>{{ $incident->bank_id }}</p>


        <h3 class="font-semibold text-xl text-gray-800">@lang('Nom de lagence')</h3>
        <p>{{ $incident->agency_name }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Code de lagence')</h3>
        <p>{{ $incident->agency_id }}</p>


        <h3 class="font-semibold text-xl text-gray-800">@lang('Nom ou raison sociale')</h3>
        <p>{{ $incident->account_name }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Numéro de compte')</h3>
        <p>{{ $incident->account_number }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Clé du compte')</h3>
        <p>{{ $incident->account_key }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Solde du compte')</h3>
        <p>{{ $incident->account_balance }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Adresse')</h3>
        <p>{{ $incident->account_address }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Téléphone')</h3>
        <p>{{ $incident->account_phone }}</p>


        <h3 class="font-semibold text-xl text-gray-800">@lang('Numéro de la transaction')</h3>
        <p>{{ $incident->transaction_number }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Montant de la transaction')</h3>
        <p>{{ $incident->transaction_amount }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Date de la transaction')</h3>
        <p>{{ $incident->transaction_date }}</p>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Bénéficiaire de la transaction')</h3>
        <p>{{ $incident->transaction_recipient }}</p>


        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{ $task->created_at->format('d/m/Y') }}</p>
        @if($task->created_at != $task->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{ $task->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-tasks-card>
</x-app-layout>