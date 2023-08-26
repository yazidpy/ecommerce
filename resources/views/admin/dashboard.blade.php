@extends('admin.base')
@section('title', 'Tableau de bord')
@section('content')
    <div class="flex gap-4 p-4 px-3 2xl:p-8 2xl:px-6 2xl:gap-8 max-[600px]:flex-col max-[600px]:items-center max-[1000px]:mt-24">
        <div class="bg-white rounded-md flex-1 border border-gray-200 flex items-center p-4 justify-evenly 2xl:p-8 max-[600px]:p-4 max-[600px]:w-[20rem]">
            <i class="fa-solid fa-cart-shopping p-2 2xl:p-4 text-white bg-blue-500 rounded-full items-center 2xl:text-xl"></i>
            <div class="flex flex-col">
                <span class="text-xs text-gray-800 2xl:text-xl">Ventes</span>
                <span class="font-bold text-sm 2xl:text-2xl">$3000.22</span>
            </div>
        </div>
        <div class="bg-white rounded-md  flex-1 border border-gray-200 flex items-center p-4 justify-evenly 2xl:p-8 max-[600px]:p-4 max-[600px]:w-[20rem]">
            <i class="fa-solid fa-cart-shopping p-2 2xl:p-4 text-white bg-blue-500 rounded-full items-center 2xl:text-xl"></i>
            <div class="flex flex-col">
                <span class="text-xs text-gray-800 2xl:text-xl">Ventes</span>
                <span class="font-bold text-sm 2xl:text-2xl">$3000.22</span>
            </div>
        </div> <div class="bg-white rounded-md flex-1 border border-gray-200 flex items-center p-4 justify-evenly 2xl:p-8 max-[600px]:p-4 max-[600px]:w-[20rem]">
            <i class="fa-solid fa-cart-shopping p-2 2xl:p-4 text-white bg-blue-500 rounded-full items-center 2xl:text-xl"></i>
            <div class="flex flex-col">
                <span class="text-xs text-gray-800 2xl:text-xl">Ventes</span>
                <span class="font-bold text-sm 2xl:text-2xl">$3000.22</span>
            </div>
        </div> <div class="bg-white rounded-md flex-1 border border-gray-200 flex items-center p-4 justify-evenly 2xl:p-8 max-[600px]:p-4 max-[600px]:w-[20rem]">
            <i class="fa-solid fa-cart-shopping p-2 2xl:p-4 text-white bg-blue-500 rounded-full items-center 2xl:text-xl"></i>
            <div class="flex flex-col">
                <span class="text-xs text-gray-800 2xl:text-xl">Ventes</span>
                <span class="font-bold text-sm 2xl:text-2xl">$3000.22</span>
            </div>
        </div>

    </div>
    <div class="flex flex-row w-full gap-4 p-3 2xl:gap-8 2xl:p-6 max-[800px]:flex-col">
        <div class="bg-white pt-3 pb-4 border border-gray-200 flex-1 rounded-lg text-center 2xl:pt-6 2xl:pb-8 max-[700px]:overflow-x-auto">
            <strong class="text-sm text-gray-400 p-2 2xl:text-xl 2xl:p-4"> Dernières commandes</strong>
            <div class="mt-3 2xl:mt-6">
                <table class="w-full text-gray-700 text-sm 2xl:text-xl">
                    <thead class="bg-gray-100 ">
                        <tr class="font-semibold">
                            <td>ID</td>
                            <td>Produit</td>
                            <td>Client</td>
                            <td>Date</td>
                            <td>Prix</td>
                            <td>Adresse</td>
                            <td>Statut</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2">1</td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Iphone</a></td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Yazid</a></td>
                            <td>12/10/2023</td>
                            <td>$100</td>
                            <td>tizi ouzou</td>
                            <td class="font-bold text-yellow-500">Placé</td>
                        </tr>
                        <tr>
                            <td class="p-2">1</td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Iphone</a></td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Yazid</a></td>
                            <td>12/10/2023</td>
                            <td>$100</td>
                            <td>tizi ouzou</td>
                            <td class="font-bold text-green-500">Confirmé</td>
                        </tr>
                        <tr>
                            <td class="p-2">1</td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Iphone</a></td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Yazid</a></td>
                            <td>12/10/2023</td>
                            <td>$100</td>
                            <td>tizi ouzou</td>
                            <td class="font-bold text-red-500">Supprimé</td>
                        </tr>
                        <tr>
                            <td class="p-2">1</td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Iphone</a></td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Yazid</a></td>
                            <td>12/10/2023</td>
                            <td>$100</td>
                            <td>tizi ouzou</td>
                            <td class="font-bold text-green-500">Confirmé</td>
                        </tr>
                        <tr>
                            <td class="p-2">1</td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Iphone</a></td>
                            <td><a href="#" class="cursor-pointer text-blue-500">Yazid</a></td>
                            <td>12/10/2023</td>
                            <td>$100</td>
                            <td>tizi ouzou</td>
                            <td class="font-bold text-red-500">Supprimé</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-white pt-3 pb-4 border border-gray-200  w-[15rem] rounded-lg 2xl:w-[25rem] max-[800px]:w-auto max-[800px]:items-center overflow-y-auto h-[20rem]">
            <strong class="text-sm text-gray-400 p-2 2xl:text-xl 2xl:p-4"> Produits populaires</strong>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/1.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/2.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/1.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/2.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/3.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/4.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>

            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/3.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>
            <div class="flex flex-row justify-between p-1 items-center px-2 max-[800px]:justify-evenly ">
                <img src='{{asset('images/4.jpg')}}' class="h-10 w-10  2xl:h-14 2xl:w-14"/>
                <div class="flex flex-col gap-2 p-2 2xl:gap-4 2xl:p-4">
                    <span class="font-bold text-sm 2xl:text-xl">MacBoc</span>
                    <span class="text-green-400 text-xs 2xl:text-xl">341 in stock</span>
                </div>
                <span class="text-gray-400 text-sm 2xl:text-xl">1400$</span>
            </div>

        </div>
    </div>
@endsection
