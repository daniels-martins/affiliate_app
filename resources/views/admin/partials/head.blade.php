<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <link rel="icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png"
        sizes="32x32" />
    <link rel="icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://landandcribs.com/wp-content/uploads/2022/11/Land-Cribs-Black.png" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/static/admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="/static/admin_assets/styles/tailwind.css" />
    {{-- @vite(['app.css']) --}}
    <title>{{ env('APP_NAME', 'Imagine') }} | Affiliate - {{ ucfirst(Route::currentRouteName()) }}</title>


</head>
