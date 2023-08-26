@extends('client.base')
@section('title', 'Connexion')
@section('content')
    <section class="mt-24" id="login">
        <div class="flex flex-row gap-2 items-center p-4 mb-2">
            <i class="fa-solid fa-home text-red-500 font-bold"></i>
            <i class="fa-solid fa-chevron-right text-red-500 font-bold"></i>
            <span class="text-gray-600">Connexion</span>
        </div>
        <form action="{{route('auth.login')}}" method="post">
            @csrf
        <div class=" flex justify-center  w-full h-full max-[700px]:text-sm">
            <div class="flex flex-col gap-5 bg-white shadow-md w-[50vw] max-[700px]:w-[80vw] p-8">
                <div class="flex flex-col gap-1">
                    <h2 class="text-gray-700 text-base font-bold">Login</h2>
                    <span class="text-gray-500 text-sm">Connecter pour passer des commandes</span>
                    @if(session('error'))
                    <span class="text-red-500 text-sm font-bold max-[700px]:font-normal">{{session('error')}}</span>
                    @endif
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-gray-600">Adresse email <span class="text-red-500 font-bold">*</span></span>
                    <input type="email" placeholder="exemple@gmail.com"
                        class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 shadow-sm shadow-red-400"  name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text-red-500 text-sm ml-2">{{$message}}</span>
                        @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-gray-600">Mot de passe<span class="text-red-500 font-bold"> *</span></span>
                    <input type="password" placeholder="Type mot de passe.."
                        class="p-3 bg-white focus:outline-none focus:border shadow-sm shadow-red-400 focus:border-red-500"name="password">
                        @error('password')
                    <span class="text-red-500 text-sm ml-2">{{$message}}</span>
                        @enderror
                </div>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-row gap-1">
                        <input type="checkbox">
                        <span class="text-gray-600">Se souvenir de moi</span>
                    </div>
                    <a href="" class="text-blue-500 hover:border-b hover:border-red-500 transition-all w-max">Mot de
                        passe oublié?</a>
                </div>
                <div class="flex">
                    <input type="submit" name="login" id="" value="Login"
                        class="w-[100%] cursor-pointer p-2 bg-red-500 text-white text-center hover:bg-white hover:text-red-500 hover:border hover:border-red-500 transition-all">
                </div>
                <div class="flex justify-between flex-row items-center">
                    <div class="flex flex-row gap-2 items-center">
                        <div class="hidden icon_robot_verifie transition-all">
                            <i class="fa-solid fa-check text-green-500 font-extrabold text-base"></i>
                        </div>
                        <input type="checkbox" class="cursor-pointer checkbox_robot" name="chekbox_robot">
                        <span class="text-gray-600">Je ne suis pas un robot</span>
                    </div>
                    <div class="">
                        <img src="{{ asset('images/capatch2.jpg') }}" class="w-20 h-20 img_capatcha">
                    </div>
                </div>
                @error('chekbox_robot')
                <span class="text-red-500 text-sm ml-2 mt-[-2rem]">{{$message}}</span>
                @enderror
                <div class="flex flex-col gap-3">
                    <span class="text-gray-600 text-center">Ou bien connecter avec</span>
                    <div class="flex flex-row gap-4">
                        <a href=""
                            class=" w-[50%] p-2 bg-blue-700 text-white text-center hover:bg-white hover:text-blue-700 hover:border hover:border-blue-700 transition-all">Facebook</a>
                        <a href=""
                            class="p-2 w-[50%]  bg-yellow-600 text-white text-center hover:bg-white hover:text-yellow-600 hover:border hover:border-yellow-600 transition-all">google</a>
                    </div>
                </div>
                <div class="flex flex-row gap-2 justify-center">
                    <span>Vous avez pas un compte?</span>
                    <a class="text-red-500 cursor-pointer">S'inscrire</a>
                </div>
            </div>
        </div>
    </form>
    </section>
    <div class="flex relative">
        <div class="fixed bottom-3 right-3  cursor-pointer" style="z-index: 1000">
            <a href="#login"><i class="fa-solid fa-chevron-up text-white text-xl p-4 bg-red-400 rounded-full"></i></a>
        </div>
    </div>
@endsection
