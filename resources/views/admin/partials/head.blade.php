<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <link rel="icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png" sizes="32x32" />
    <link rel="icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/static/admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="/static/admin_assets/styles/tailwind.css" />
    {{-- @vite(['app.css']) --}}
    <title>{{ env('APP_NAME', 'Imagine') }} | Affiliate - {{ ucfirst(Route::currentRouteName()) }}</title>

    {{-- sweetalert2 --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    {{-- <script defer src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


@if (session('profile-updated'))
    <script>
        document.onreadystatechange = () => {
            if (document.readyState === "interactive") {
                //  initApplication();
                swal(
                    'Good job',
                    'Proilfe Updated',
                    'success'
                )
            }
        };
    </script>
@endif
