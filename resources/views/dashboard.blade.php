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
                        Ref Link: <a href=" {{ route('register', ['ref' => auth()->user()->ref_code ?? 000]) }}">
                            {{ route('register', ['ref' => auth()->user()->ref_code ?? 000]) }}</a> <br>

                    </div>
                    <div class="upline bg-blue-400 p-3 rounded shadow-sm text-gray-700 my-5">
                        <p class="text-xl">My Upline Data </p> <br>
                        Super code: {{ auth()->user()->super_code ?? 'No super_code' }}<br><br>
                        Upline:
                        @empty(auth()->user()->getUpline('name'))
                            {{ 'No upline' }}
                        @else
                            {{ ucfirst(auth()->user()->getUpline('name')) }}
                        @endempty
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
