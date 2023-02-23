@extends('admin.layout.app')
@section('content')
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    Card Tables
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
                                        Project
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Budget
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Status
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Users
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Completion
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/bootstrap.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            Argon Design System
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $2,500 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-orange-500 mr-2"></i>
                                        pending
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">60%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                    <div style="width: 60%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/angular.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            Angular Now UI Kit PRO
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $1,800 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                        completed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">100%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                    <div style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-light-2-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-light-2-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/sketch.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            Black Dashboard Sketch
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $3,150 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-red-500 mr-2"></i>
                                        delayed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">73%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                    <div style="width: 73%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-light-3-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-light-3-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/react.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            React Material Dashboard
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $4,400 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-teal-500 mr-2"></i> on
                                        schedule
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">90%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-teal-200">
                                                    <div style="width: 90%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-light-4-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-light-4-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/vue.jpg" class="h-12 w-12 bg-white rounded-full border"
                                            alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">
                                            React Material Dashboard
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $2,200 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                        completed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">100%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                    <div style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-light-5-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-light-5-dropdown">
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full mb-12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-pink-900 text-white">
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
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                        Project
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                        Budget
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                        Status
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                        Users
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                        Completion
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/bootstrap.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-white">
                                            Argon Design System
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $2,500 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-orange-500 mr-2"></i>
                                        pending
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">60%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                    <div style="width: 60%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-dark-1-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-dark-1-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/angular.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-white">
                                            Angular Now UI Kit PRO
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $1,800 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                        completed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">100%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                    <div style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-dark-2-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-dark-2-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/sketch.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-white">
                                            Black Dashboard Sketch
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $3,150 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-red-500 mr-2"></i>
                                        delayed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">73%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                    <div style="width: 73%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-dark-3-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-dark-3-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/react.jpg"
                                            class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-white">
                                            React Material Dashboard
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $4,400 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-teal-500 mr-2"></i> on
                                        schedule
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">90%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-teal-200">
                                                    <div style="width: 90%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-dark-4-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-dark-4-dropdown">
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
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="/static/admin_assets/img/vue.jpg" class="h-12 w-12 bg-white rounded-full border"
                                            alt="..." />
                                        <span class="ml-3 font-bold text-white">
                                            React Material Dashboard
                                        </span>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        $2,200 USD
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-circle text-emerald-500 mr-2"></i>
                                        completed
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex">
                                            <img src="/static/admin_assets/img/team-1-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow" />
                                            <img src="/static/admin_assets/img/team-2-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-3-800x800.jpg" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                            <img src="/static/admin_assets/img/team-4-470x470.png" alt="..."
                                                class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4" />
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">100%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                    <div style="width: 100%"
                                                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                                            onclick="openDropdown(event,'table-dark-5-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                            id="table-dark-5-dropdown">
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection