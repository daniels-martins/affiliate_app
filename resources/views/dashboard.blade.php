<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div class="account_summary">
                            Brief Summary
                        </div>
                        {{-- enable link to admin panel --}}
                        <div class="admin-panel-link">
                            <a class="text-white bg-blue-500 py-2 px-4 hover:bg-blue-400  rounded"
                                href="{{ route('admin_panel') }}"> View Admin Panel</a>
                        </div>
                    </div>
                    <br><br>
                    <div class="referral upline bg-gray-200 p-3 rounded shadow-sm text-gray-700 my-5">
                        <p class="text-xl">My Refferal Data </p> <br>
                        Ref code: {{ auth()->user()->ref_code ?? 'ref_code' }} <br><br>
                        Ref Link: <a href=" {{ auth()->user()->getRefLink() }}">
                            {{ auth()->user()->getRefLink() }}</a> <br>

                    </div>

                    <div class="referral upline bg-gray-200 p-3 rounded shadow-sm text-gray-700 my-5">
                        <p class="text-xl">My Bank Details </p> <br>
                        BANK: <span class="p-2 text-white bg-green-400">{{ auth()->user()->bank_name ?? 'N/A' }}
                        </span><br><br>
                        BANK ACCOUNT NAME : <span
                            class="p-2 bg-green-400 text-white">{{ auth()->user()->bank_account_name ?? 'N/A' }}</span>
                        <br><br>
                        BANK ACCOUNT NUMBER : <span
                            class="p-2 text-white bg-green-400">{{ auth()->user()->bank_account_num ?? 'N/A' }}</span>
                        <br><br>

                    </div>



                    @if (auth()->user()->getDownlines())
                        <div class="downlines bg-green-400 p-3 rounded shadow-sm text-gray-700 my-5">
                            <p class="text-xl">My Downlines ({{ auth()->user()->getDownlines()->count() }})</p> <br>
                            <ol type="a">
                                @foreach (auth()->user()->getDownlines() as $key => $downline)
                                    <li> {{ ++$key . '. ' . ucfirst($downline->name) }}</li> <br>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
