@extends('admin.base')
@section('title', 'Produit')
@section('content')
    <div class="flex flex-col gap-4 px-6 max-[1000px]:mt-24 max-[1000px]:gap-8">
        <div class="flex justify-between max-[700px]:flex-col flex-row items-center px-4">
            <span class="text-xl text-center text-gray-600 max-[1000px]:text-lg">liste des produits</span>
                @if(session('success'))
                <h2 class="text-green-600 bg-slate-100 p-2 border text-center font-semibold items-center mt-4">
                    {{session('success')}}
                    <i class="fa-solid fa-check"></i></h2>
                @endif
            <a href="{{ route('admin.produit.create') }}">
                <button
                    class="bg-red-300 rounded-xl p-2  mt-5 text-white hover:bg-gray-500 transition-all font-bold max-[1000px]:text-sm">
                    Ajouter un produit
                </button>
            </a>
        </div>
        <div
            class="bg-white pt-3 pb-4 border border-gray-200 rounded-lg text-center 2xl:pt-6 2xl:pb-8 px-6 h-[20rem] overflow-y-auto flex flex-col">
            <div class="mt-3 2xl:mt-6 max-[700px]:overflow-y-auto max-[700px]:w-full">
                <table class="w-full text-gray-700 text-sm 2xl:text-xl max-[1000px]:text-xs">
                    <thead class="bg-gray-100">
                        <tr class="font-semibold text-xs">
                            <td class="p-6"></td>
                            <td class="p-1">ID</td>
                            <td class="p-1">Nom</td>
                            <td class="p-1">Marque</td>
                            <td class="p-1"> Catègorie</td>
                            <td class="p-1">Prix</td>
                            <td class="p-1">Quantite</td>
                            <td class="p-3">Disponibilité</td>
                            <td class="p-6">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                            <tr>
                                @if ($produit->image)
                                <td><img src="/storage/{{$produit->image}}" class="h-16 w-16 rounded-full" alt="">
                                </td>
                                @endif
                                <td class="p-3 text-xs font-bold text-center">{{ $produit->id}}</td>
                                <td class="p-3 text-xs font-bold text-center">{{ $produit->nom_produit }}</td>
                                <td class="p-3 text-xs font-bold text-center">{{ $produit->marque }}</td>
                                <td class="p-3 text-xs font-bold text-center">{{ $produit->categorie->nom_categorie}}</td>
                                <td class="p-3 text-xs font-bold text-center">
                                    {{ number_format($produit->prix, thousands_separator: ' ') }} DA</td>
                                <td class="p-3 text-xs font-bold text-center">{{ $produit->stock }}</td>
                                @php
                                    $qte = $produit->stock;
                                @endphp
                                <td>
                                    @if ($qte > 0)
                                        <span
                                            class="text-white  bg-green-600 p-2 rounded-full text-xs font-bold">Disponible</span>
                                    @else
                                        <span class="text-white bg-red-600 p-2 rounded-full text-xs font-bold">Pas
                                            disponible</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex items-center ml-4">
                                    <form action="{{ route('admin.produit.destroy', $produit) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button>
                                        <i
                                            class="fa-solid fa-trash-can text-white bg-red-500  p-2 cursor-pointer rounded-full text-center "></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.produit.edit', $produit) }}"><i
                                            class="fa-solid fa-pen-to-square text-white bg-green-500 p-2 cursor-pointer rounded-full ml-2 text-center"></i>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-8">
            {{ $produits->links() }}
        </div>
    </div>
@endsection
