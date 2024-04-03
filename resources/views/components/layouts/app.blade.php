<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title id="app_title">Test</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>--}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{--    @livewireStyles--}}
</head>

<body class="p-1">
<header>
    header
</header>


<main class="z-20 " class="overflow-y-scroll"  wire:scroll>
    {{ $slot }}
</main>

<footer class="w-full d1" style="height: 50px !important;">
    footer
</footer>

{{--@livewireScripts--}}
@stack('scripts')
</body>
</html>

<!--

@persist('scrollbar')
<div class="overflow-y-scroll" wire:scroll>
    &lt;!&ndash; ... &ndash;&gt;
</div>
@endpersist-->
