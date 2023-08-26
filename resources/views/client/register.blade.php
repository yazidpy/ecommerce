@extends('client.base')
@section('title', 'Inscription')
@section('content')
    <section class="mt-24" id="register">
        <form action="">
            {{-- Laravel brezze
                composer require laravel/breeze --dev
                php artisan breeze:install blade--}}
            @csrf
            <div class="flex flex-row gap-2 items-center p-4 mb-2">
                <i class="fa-solid fa-home text-red-500 font-bold"></i>
                <i class="fa-solid fa-chevron-right text-red-500 font-bold"></i>
                <span class="text-gray-600">Inscription</span>
            </div>
            <div class=" flex justify-center w-full h-full max-[700px]:text-sm">
                <div class="flex flex-col gap-5 bg-white shadow-md w-[50vw] max-[700px]:w-[90vw] p-8">
                    <div class="flex flex-col gap-2 items-center">
                        <h2 class="text-gray-700 text-base font-bold">Inscription</h2>
                        <span class="text-gray-500 text-sm">Faites une inscription pour pouvoir connecter !</span>
                        <span class="text-red-600 font-bold text-xs">// Les champs avec * sont obligatoires //</span>
                    </div>
                    <div class="flex flex-row gap-2 justify-between max-[800px]:flex-col">
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Nom <span class="text-red-500 font-bold">*</span></span>
                            <input type="text" placeholder="Votre nom de famille"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="nom">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Prénom <span class="text-red-500 font-bold">*</span></span>
                            <input type="text" placeholder="Votre prénom"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="prenom">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between gap-2 max-[800px]:flex-col">
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">E-mail <span class="text-red-500 font-bold">*</span></span>
                            <input type="email" placeholder="exemple@gmail.com"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="email">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Téléphone <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="number" placeholder="+213.."
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="telephone">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between  gap-2 max-[800px]:flex-col">
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Mot de passe <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="password" placeholder="Type mot de passe"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="password">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Confirmation <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="password" placeholder="Confirmer votre mot de passe"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm"
                                autofocus=false name="repassword">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between  gap-2 max-[800px]:flex-col">
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Adresse de livraison <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="text" placeholder="Code postal + rue + Ville"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm" name="adresse_liv">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Adresse de facturation <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="text" placeholder="Adresse associé au paiement"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm"
                                autofocus=false name="adresse_fac">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="block">
                        <div class="flex flex-col gap-2">
                            <span class="text-gray-600 text-sm">Date de naissance <span
                                    class="text-red-500 font-bold">*</span></span>
                            <input type="date"
                                class="p-3 bg-white focus:outline-none focus:border focus:border-red-500 border text-sm cursor-pointer" name="date_naiss">
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="flex flex-col gap-4">
                            <span class="text-gray-600 text-sm">Sexe <span class="text-red-500 font-bold">*</span></span>
                            <div class="flex flex-row gap-4">
                                <div class="flex flex-row gap-1">
                                    <span class="text-gray-600 text-sm">Homme</span>
                                    <input type="radio" class="cursor-pointer" name="sexe">
                                </div>
                                <div class="flex flex-row gap-1">
                                    <span class="text-gray-600 text-sm">Femme</span>
                                    <input type="radio" class="cursor-pointer" name="sexe">
                                </div>
                            </div>
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <span class="text-gray-600 text-sm">Préférence</span>
                            <div class="flex flex-row gap-4">
                                <div class="flex flex-row gap-1">
                                    <span class="text-gray-600 text-sm">Email</span>
                                    <input type="radio" class="cursor-pointer" name="preference">
                                </div>
                                <div class="flex flex-row gap-1">
                                    <span class="text-gray-600 text-sm">SMS</span>
                                    <input type="radio" class="cursor-pointer" name="preference">
                                </div>
                            </div>
                            <span class="text-red-500 text-xs font-semibold"></span>
                        </div>
                    </div>
                    <div class="flex justify-between gap-2 flex-row max-[700px]:flex-col">
                        <div class="flex flex-row gap-2  items-center">
                            <div class="hidden icon_condition_verifie transition-all">
                                <i class="fa-solid fa-check text-green-500 font-extrabold text-base"></i>
                            </div>
                            <input type="checkbox" name="" id="" class="checkbox_condition" name="regle">
                            <span class="text-gray-600">Accepter les régles </span>
                        </div>
                        <div class="flex flex-row  gap-2">
                            <div class="flex flex-row gap-1 items-center">
                                <div class="hidden icon_robot_verifie transition-all">
                                    <i class="fa-solid fa-check text-green-500 font-extrabold text-base"></i>
                                </div>
                                <input type="checkbox" class="cursor-pointer checkbox_robot" name="robot">
                                <span class="text-gray-600">Je ne suis pas un robot</span>
                            </div>
                            <div class="ml-4">
                                <img src="{{ asset('images/capatch2.jpg') }}" class="w-16 h-16 img_capatcha">
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <input type="submit" name="" id="" value="Valider"
                            class="w-[100%] cursor-pointer p-2 bg-red-500 text-white text-center hover:bg-white hover:text-red-500 hover:border hover:border-red-500 transition-all">
                    </div>
                    <div class="flex flex-row gap-2 justify-center">
                        <span>Vous avez déjà un compte ?</span>
                        <a class="text-red-500 cursor-pointer">Se connecter</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <div class="flex relative">
        <div class="fixed bottom-3 right-3  cursor-pointer" style="z-index: 1000">
            <a href="#register"><i class="fa-solid fa-chevron-up text-white text-xl p-4 bg-red-400 rounded-full"></i></a>
        </div>
    </div>
@endsection
