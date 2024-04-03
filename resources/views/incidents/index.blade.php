<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des incidents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative w-full overflow-auto">
                        <table class="w-full caption-bottom text-sm">
                            <thead class="[&amp;_tr]:border-b">
                                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 w-[30px] border border-black">
                                        #
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                        Nom ou Raison Sociale
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                        Numéro de compte
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                        Numéro de la transaction
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                        Montant de la transaction
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                        Date de la transaction
                                    </th>
                                    <th
                                        class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 w-[60px] border border-black">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="[&amp;_tr:last-child]:border-0">
                                @forelse ($incidents as $incident)
                                    <tr
                                        class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium border border-black">
                                            {{-- {{ $incident -> id }} --}}
                                            {{ $loop->index + $incidents->firstItem() }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                            {{ $incident->account_name }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                            {{ $incident->account_number }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                            {{ $incident->transaction_number }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                            {{ $incident->transaction_amount }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border border-black">
                                            {{ $incident->transaction_date }}
                                        </td>
                                        <td
                                            class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 flex gap-2 border border-black">
                                            <button title="Voir"
                                                href="{{ route('show', $incident->id) }}
                                            class="inline-flex
                                                items-center justify-center whitespace-nowrap rounded-md text-sm
                                                font-medium ring-offset-background transition-colors
                                                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring
                                                focus-visible:ring-offset-2 disabled:pointer-events-none
                                                disabled:opacity-50 border border-input bg-background hover:bg-accent
                                                hover:text-accent-foreground h-10 w-10"
                                                style="margin: 5px; padding: 3px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-5 w-5">
                                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </button>
                                            <button title="Modifier"
                                                href="{{ route('edit', $incident->id) }}
                                            class="inline-flex
                                                items-center justify-center whitespace-nowrap rounded-md text-sm
                                                font-medium ring-offset-background transition-colors
                                                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring
                                                focus-visible:ring-offset-2 disabled:pointer-events-none
                                                disabled:opacity-50 border border-input bg-background hover:bg-accent
                                                hover:text-accent-foreground h-10 w-10"
                                                style="margin: 5px; padding: 3px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-5 w-5">
                                                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                                                    <path d="m15 5 4 4"></path>
                                                </svg>
                                            </button>
                                            <button title="Supprimer"
                                                onclick="event.preventDefault(); document.getElementById('destroy{{ $incident->id }}').submit();"
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10"
                                                style="margin: 5px; padding: 3px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-5 w-5">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Aucun incident trouvé.</td>
                                    </tr>
                                @endforelse

                            </tbody>
                            {{-- @if ($incidents->hasPages())
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="p-2">
                                                {{ $incidents->links() }}
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            @endif --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
