<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-commerce- Erreur 404</title>
</head>
<body>
<div class="flex flex-row justify-between max-[700px]:flex-col">
    <div class="w-full">
        <img src="{{asset('images/erreur.avif')}}" class=""/>
    </div>
    <div class="flex flex-col w-full mt-8 gap-4">
        <span class="text-black font-extrabold text-center text-2xl max-[700px]:text-xl">Oups, Voilà qui n'était pas prévu</span>
        <span class="text-black font-bold text-start text-xl mt-4 max-[700px]:p-4 max-[700px]:text-lg">Erreur 404</span>
        <span class="text-gray-600 text-lg mt-2 max-[700px]:p-4 max-[700px]:text-base">Désolé il nous semble que il y'a une erreur du serveur veuillez réssayer plus tard</span>
        <div class="flex flex-row gap-3 mt-36 max-[700px]:p-4 max-[700px]:mt-10">
            <a href="" class="p-4 text-white bg-red-500 rounded-md cursor-pointer hover:bg-slate-100 hover:text-red-500 hover:border  transition-all w-64 text-center max-[700px]:w-30">Page d'acceuil</a>
            <a href="" class="p-4 text-red-500 bg-white border rounded-md cursor-pointer hover:bg-red-500 hover:text-white hover:border-none transition-all w-64 text-center max-[700px]:w-300">Consulter la FAQ</a>
        </div>

    </div>
</div>
</body>
</html>
