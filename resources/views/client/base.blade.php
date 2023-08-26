<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Commerce - @yield('title')</title>
</head>
<style>
    @keyframes animate_once {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
    .animate-once {
        animation: animate_once 1s linear;
    }
</style>
<body class="bg-slate-50 overflow-x-hidden font-serif">
    {{-- <div class="flex relative">
        <div class="fixed bottom-3 right-3  cursor-pointer" style="z-index: 1000">
            <a href="#acceuil"><i class="fa-solid fa-chevron-up text-white text-xl p-4 bg-red-400 rounded-full"></i></a>
        </div>
    </div> --}}
    @include('client.view_partage.navbar')
    @yield('content')
    @include('client.view_partage.footer')
    <script src='{{ asset('js/jquery.js') }}'></script>
    <script src='{{ asset('js/app.js') }}'></script>
    <script src="https://kit.fontawesome.com/4d31c75fa5.js" crossorigin="anonymous"></script>
</body>
</html>
