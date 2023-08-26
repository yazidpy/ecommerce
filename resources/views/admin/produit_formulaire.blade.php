<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit - {{ $produit->exists ? 'Modifier un produit' : 'Ajouter un produit' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="body bg-slate-00">
    <div class="fixed top-5 left-5 cursor-pointer max-[700px]:top-2 max-[700px]:left-2">
        <i class="fa-solid fa-arrow-left p-3 text-lg text-white bg-blue-400 rounded-full"></i>
    </div>
    <div class="bg-white shadow-lg p-2 mt-4 w-full">
        <h2 class="p-2 text-center text-gray-600 text-lg">
            @if ($produit->exists)
                Modifier un Produit
            @else
                Ajouter un Produit
            @endif
        </h2>
        @if (session('success'))
            <h2 class="text-green-600 bg-slate-100 p-2 border text-center font-semibold items-center mt-4">
                {{ session('success') }}
                <i class="fa-solid fa-check"></i>
            </h2>
        @endif
        <form method="post"
            action="{{ route($produit->exists ? 'admin.produit.update' : 'admin.produit.store', $produit) }}"
            enctype="multipart/form-data">
            @csrf
            @method($produit->exists ? 'put' : 'post')
            <div class=" flex flex-col justify-center items-center mt-4 gap-3">
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Produit</span>
                        <input type="text" placeholder="Nom du produit"
                            class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm" name="nom_produit"
                            @if ($produit->exists) value={{ $produit->nom_produit }}
                            @else
                            value="{{ old('nom_produit') }}" @endif>
                    </div>
                    @error('nom_produit')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Description</span>
                        <input type="text" placeholder="Description du produit"
                            class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm" name="description"
                            @if ($produit->exists) value="{{ $produit->description }}"
                            @else
                            value="{{ old('description') }}" @endif>
                    </div>
                    @error('description')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Catégorie</span>
                        <select name="categorie_id" id=""
                            class="p-2 focus:outline-none text-sm text-gray-700 selection:p-2 selection:bg-white">
                            @foreach ( $categories as $id =>$nom )
                            <option value="{{$id}}" class="bg-white">{{$nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('categorie')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Marque</span>
                        <input type="text" placeholder="Marque du produit"
                            class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm" name="marque"
                            @if ($produit->exists) value={{ $produit->marque }}
                            @else
                            value="{{ old('marque') }}" @endif>
                    </div>
                    @error('marque')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Stock</span>
                        <input type="number" class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm"
                            min="0" name="stock"
                            @if ($produit->exists) value={{ $produit->stock }}
                            @else
                            value="{{ old('stock') }}" @endif>
                    </div>
                    @error('stock')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Prix</span>
                        <input type="text" class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm"
                            step="0.01" min="0" name="prix"
                            @if ($produit->exists) value={{ $produit->prix }}
                            @else
                            value="{{ old('prix') }}" @endif>
                    </div>
                    @error('prix')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-0 mx-6">
                    <div
                        class="flex flex-row  rounded-lg border-2 p-2 w-[35rem] max-[600px]:w-[20rem] items-center justify-between">
                        <span class="text-gray-600 text-base max-[700px]:text-sm">Image</span>
                        <input type="file" class="p-2 focus:outline-none text-sm text-gray-700 max-[700px]:text-sm"
                            name="image" value="{{ old('image') }}">
                    </div>
                    @error('image')
                        <span class="text-red-500  p-2 text-sm font-semibold">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="" id="" value="Ajouter"
                    class="mb-8 mt-3 p-4 rounded-xl cursor-pointer focus:outline-none text-sm text-white bg-blue-500 w-[35rem] max-[600px]:w-[20rem]">
                    @if ($produit->exists)
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
