<!--
=========================================================
* Notus Tailwind JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim
=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>
@include('admin.partials.head')

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        @include('admin.partials.nav'){{-- for pc side-menu --}}
        <div class="relative md:ml-64 bg-blueGray-50">
            @include('admin.partials.nav2'){{-- for mobile  --}}
            <!-- Header -->
            {{-- the header element goes here --}}
            @include('admin.partials.header')
            <div class="px-4 md:px-10 mx-auto w-full -m-24">

                @yield('content')
                @include('admin.partials.footer')
            </div>
        </div>
    </div>
    @include('admin.partials.static_scripts')
    @stack('page_scripts')
</body>

</html>
