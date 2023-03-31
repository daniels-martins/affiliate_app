@extends('admin.layout.app')

@section('content')
{{-- {{  dd($user ?: null, auth()->user()) }} --}}

    <div class="flex flex-wrap mt-4">
        <div class="w-full mb-12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                All Users 
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    NAME AND PHOTO
                                </th>
                               
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    role
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    latest referrals
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    total <br> downlines
                                </th>

                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Referral <br> links
                                </th>

                                {{-- <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Actions
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_users as $user)
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/bootstrap.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            <a href="{{ route('users.show', $user->id) }}">{{ ucfirst($user->name) }}</a>
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i
                                            class="fas fa-circle {{ $user->is_admin ? 'text-orange-500 mr-2' : 'text-emerald-500 mr-2' }}"></i>
                                        <span class="uppercase"> {{ $user->is_admin ? 'admin' : 'client' }}</span>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            {{-- for the first downline --}}
                                            @if ($first_downline = $user->hasADownline())
                                                <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                    title="{{ $first_downline->name }}"
                                                    class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            @endif
                                            {{-- for subsquent downlines --}}
                                            @if ($user->hasADownline() and $user->getDownlines()->count() > 1)
                                                @foreach ($user->getDownlines()->skip(1)->take(4) as $downline)
                                                    <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                        title="{{ $downline->name }}"
                                                        class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                                @endforeach
                                            @endif
                                        </div>
                                    </td>

                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ $user->getDownlines()?->count() ?? 0 }}
                                    </td>

                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <a href="{{ route('register', ['ref' => $user->ref_code]) }}">USER REFERRAL LINK</a>
                                    </td>
                                    {{-- <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-light-1-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-light-1-dropdown">
                                            <a href="#pablo"
                                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                                href="#pablo"
                                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                                action</a><a href="#pablo"
                                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                                else here</a>
                                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                            <a href="#pablo"
                                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                                link</a>
                                        </div>
                                    </td> --}}
                                </tr>
                            @endforeach
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-full mb-12 px-4">
            {{-- <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-pink-900 text-white">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-white">
                                Card Tables
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                </div>
            </div> --}}
        </div>
    </div>
@endsection
