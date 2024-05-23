<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    {{-- @vite('resources/css/app.css') --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('/assets/js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('/assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('/assets/js/charts-pie.js') }}" defer></script>
    <!-- Tambahkan di bagian <head> pada file HTML Anda -->
    <style>
        /* Tambahan CSS khusus */
        .notification {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Tambahan CSS untuk Select2 */
        .select2-container--default .select2-selection--single {
           border-color: #4B5563;
            background-color: #24262D;
            color: #D1D5DB;
            height: 3rem;
            padding-left: 0.5rem;
            padding-top: 0.5rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #D1D5DB;
            /* dark:text-gray-300 */
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #9CA3AF;
            /* text-gray-400 */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #D1D5DB transparent transparent transparent;
            /* dark:text-gray-300 */
        }
    </style>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
