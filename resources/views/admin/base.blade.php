<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body bg-slate-00">
    <div class="flex flex-row bg-neutral-100 h-screen w-screen overflow-hidden">
        @include('admin.view_partagé.sidebar')
        <div class="flex-1 overflow-auto">
            <div class="">
                @include('admin.view_partagé.navbar')
            </div>
            @yield('content')
            <div class="">
            @include('admin.view_partagé.setting')
        </div>
        </div>
    </div>
    <script src='{{ asset('js/jquery.js') }}'></script>
    <script src='{{ asset('js/app.js') }}'></script>
    <script src="https://kit.fontawesome.com/4d31c75fa5.js" crossorigin="anonymous"></script>

</body>

</html>
{{-- <div class="flex relative">
    <div class="fixed bottom-3 right-3 p-2 bg-blue-500 rounded-full cursor-pointer" style="z-index: 1000">
        <i class="fa-solid fa-gear text-white text-xl"></i>
    </div>
</div> --}}
