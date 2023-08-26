@extends('admin.base')
@section('title', 'Catègories')
@section('content')
    <div class="flex flex-col gap-4 px-6 max-[1000px]:mt-24 max-[1000px]:gap-8">
        <div class="flex justify-between flex-row items-center px-4">
            <span class="text-xl text-center text-gray-600 max-[1000px]:text-lg">liste des Catégories</span>
            @if (session('success'))
                <h2 class="text-green-600 bg-slate-100 p-2 border text-center font-semibold items-center mt-4">
                    {{ session('success') }}
                    <i class="fa-solid fa-check"></i>
                </h2>
            @endif
            <a href="{{ route('admin.categorie.create') }}">
                <button
                    class="bg-red-300 rounded-xl p-2  mt-5 text-white hover:bg-gray-500 transition-all font-bold max-[1000px]:text-sm">
                    Ajouter une Catègorie
                </button>
            </a>
        </div>
        <div
            class="bg-white pt-3 pb-4 border border-gray-200 rounded-lg text-center 2xl:pt-6 2xl:pb-8 px-6 h-[20rem] overflow-y-auto flex flex-col">
            <div class="mt-3 2xl:mt-6 max-[700px]:overflow-y-auto max-[700px]:w-full">
                <table class="w-full text-gray-700 text-sm 2xl:text-xl max-[1000px]:text-xs">
                    <thead class="bg-gray-100">
                        <tr class="font-semibold text-xs">
                            <td class="p-2">ID</td>
                            <td class="p-2">Nom catègorie</td>
                            <td class="p-2">Description</td>
                            <td class="p-2">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie )
                        <tr>
                            <td class="p-3  text-xs font-bold text-center">{{$categorie->id}}</td>
                            <td class="p-3 text-xs font-bold text-center">{{$categorie->nom_categorie}}</td>
                            <td class="p-3 text-xs text-gray-600">{{$categorie->description_categorie}}</td>
                            <td>
                                <div class="flex items-center justify-center gap-4 mt-1">
                                    <form action="{{route('admin.categorie.destroy',$categorie)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button>
                                            <i
                                                class="fa-solid fa-trash-can text-white bg-red-500  p-2 cursor-pointer rounded-full text-center "></i>
                                        </button>
                                    </form>
                                    <a href="{{route('admin.categorie.edit',$categorie)}}"><i
                                            class="fa-solid fa-pen-to-square text-white bg-green-500 p-2 cursor-pointer rounded-full  text-center"></i>
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
              {{-- $categories->links() @endphp --}}
        </div>
    </div>
@endsection
