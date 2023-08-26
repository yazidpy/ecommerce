<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catègorie - {{ $categorie->exists ? 'Modifier une Catègorie' : 'Ajouter une Catègorie' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body bg-slate-00">
    <div class="fixed top-5 left-5 cursor-pointer max-[700px]:top-2 max-[700px]:left-2">
        <i class="fa-solid fa-arrow-left p-3 text-lg text-white bg-blue-400 rounded-full"></i>
    </div>
    <div class="bg-white  p-2 mt-4 w-full">
        <h2 class="p-2 text-center text-gray-600 text-lg">
            @if ($categorie->exists)
                Modifier une catégorie
            @else
                Ajouter une catégorie
            @endif
        </h2>
        @if (session('success'))
            <h2 class="text-green-600 bg-slate-100 p-2 border text-center font-semibold items-center mt-4">
                {{ session('success') }}
                <i class="fa-solid fa-check"></i>
            </h2>
        @endif
        <form method="post"
            action="{{ route($categorie->exists ? 'admin.categorie.update' : 'admin.categorie.store', $categorie) }}">
            @csrf
            @method($categorie->exists ? 'put' : 'post')
            <div class=" flex flex-col justify-center items-center mt-4 gap-3">
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Nom catègorie</span>
                        <input type="text" placeholder="Nom de la catègorie"
                            class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm"
                            name="nom_categorie"
                            @if ($categorie->exists) value="{{ $categorie->nom_categorie }}"
                        @else
                        value="{{ old('nom_categorie') }}" @endif>
                    </div>
                    @error('nom_categorie')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class=" flex flex-col justify-center items-center mt-4 gap-3">
                    <div class="flex flex-col gap-0 mx-6">
                        <div
                            class="flex flex-row rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                            <span class="text-gray-600 text-base max-[700px]:text-sm">Description</span>
                            <input type="text" placeholder="Description de la catègorie"
                                class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm"
                                name="description_categorie"
                                @if ($categorie->exists) value="{{ $categorie->description_categorie }}"
                        @else
                        value="{{ old('description_categorie') }}" @endif>
                        </div>
                        @error('description_categorie')
                            <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" name="" id="" value=""
                    class="mb-8 mt-3 p-4 rounded-xl cursor-pointer focus:outline-none text-sm text-white bg-blue-500 w-[35rem] max-[600px]:w-[20rem]">
                    @if ($categorie->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </form>
    </div>
    <script src='{{ asset('js/jquery.js') }}'></script>
    <script src='{{ asset('js/app.js') }}'></script>
    <script src="https://kit.fontawesome.com/4d31c75fa5.js" crossorigin="anonymous"></script>
</body>
</html>
