<div class="flex flex-col gap-2 text-gray-600 font-semibold text-sm px-1 bg-white">
    <div class="flex justify-between items-center flex-row border-b-2 max-[700px]:hidden transition-all">
        <div class="flex flex-row gap-3 p-4">
            <i
                class="fa-brands fa-instagram p-1 bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
            <i
                class="fa-brands fa-facebook p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
            <i
                class="fa-brands fa-twitter p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
            <i
                class="fa-brands fa-linkedin p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
        </div>
        <div class="flex items-center gap-2 border rounded-lg h-10">
            <i class="fa-solid fa-search mx-2"></i>
            <input class="p-2 bg-white  text-gray-600 w-full focus:outline-none" type="text" name=""
                id="" placeholder="Chercher un produit ici !" />
            <a href="" class="text-white bg-rose-500 p-2 rounded-sm">Chercher</a>
        </div>
        <div class="flex flex-row items-center gap-4">
            <span class="border p-1">Langue</span>
            <select class="bg-white cursor-pointer">
                <option>Français</option>
                <option>Anglais</option>
                <option>Arabe</option>
            </select>
        </div>
    </div>
    <div
        class="flex navbar_acceuil  justify-between w-full h-auto p-2 shadow-md items-center fixed z-50 bg-white transition-all max-[700px]:top-0">
        <div class="flex gap-2 px-2 py-3 items-center ">
            <img src="{{ asset('images/favicon.svg') }}"
                class="2xl:h-9 2xl:w-9 h-8 w-8 max-[700px]:h-6 max-[700px]:w-6" />
            <span class="2xl:text-xl text-lg font-extrabold max-[700px]:text-lg"><span
                    class="text-red-500">E-</span>commerce</span>
        </div>
        <div class="flex flex-row gap-6 items-cente max-[700px]:hidden">
            <a href=""
                class="border-b-2 text-gray-700 text-center  hover:text-rose-600 hover:border-rose-500 transition-all max-w-max">Acceuil</a>
            <a href="#produit"
                class="border-b-2 text-gray-700 text-center  hover:text-rose-600 hover:border-rose-500 transition-all max-w-max">Produits</a>
            <a href="#about"
                class="border-b-2 text-gray-700 text-center  hover:text-rose-600 hover:border-rose-500 transition-all max-w-max">A
                propos</a>
            <a href=""
                class="border-b-2 text-gray-700 text-center  hover:text-rose-600 hover:border-rose-500 transition-all max-w-max">Offres</a>
            <a href=""
                class="border-b-2 text-gray-700 text-center  hover:text-rose-600 hover:border-rose-500 transition-all max-w-max">Contact</a>
        </div>
        <div class="flex flex-row gap-4 mx-4">
            @auth
            <div class="relative">
                <i
                    class="fa-solid fa-cart-shopping p-3 bg-gray-100 rounded-lg font-bold hover:bg-rose-500 transition-all  hover:text-white cursor-pointer text-xl max-[700px]:text-lg"></i>
                <span class="absolute top-0 p-1 text-xs bg-red-400 text-white rounded-full">
                </span>
            </div>
            @endauth
            <div class="hidden max-[700px]:block cursor-pointer open_side_bar_acceuil">
                <i
                    class="fa-solid fa-bars  p-3 bg-gray-100 rounded-lg font-bold hover:bg-rose-500 transition-all  hover:text-white cursor-pointer text-xl max-[700px]:text-lg"></i>
            </div>
            <div class="open_boite_model_acceuil">
                <i
                    class="fa-solid fa-user p-3 bg-gray-100 rounded-lg font-bold hover:bg-rose-500  hover:text-white transition-all cursor-pointer text-xl max-[700px]:text-lg"></i>
            </div>
        </div>
    </div>
    <div
        class="fixed right-4 top-20 bg-white p-3 shadow-sm  border z-50 boite_model_acceuil transition-all hidden max-[700px]:top-20 ">
        <div class="flex flex-col gap-1 p-2">
            <div class="ferme_boite_model_acceuil">
                <i class="fa-solid fa-close absolute right-1 top-1 cursor-pointer  text-sm font-bold"></i>
            </div>
            @guest
            <div class="flex flex-col gap-1">
                <a href="{{ route('auth.login') }}"
                    class="text-red-500 p-2 rounded-sm bg-white border hover:bg-rose-500 hover:text-white transition-all btn_connect">Connecter</a>
                <a href=""
                    class="text-red-500 p-2 rounded-sm bg-white border hover:bg-rose-500 hover:text-white transition-all btn_connect">Inscrire</a>
            </div>
            @endguest
            @auth
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row gap-2 items-center">
                        <i class="fa-solid fa-user text-xs"></i>
                        <span class="text-gray-600 font-semibold text-xs">{{Auth::user()->name}}</span>
                        <div class="p-1 rounded-full bg-green-500"></div>
                    </div>
                    <form method="post" action="{{route('auth.logout')}}" class="flex text-xs flex-row gap-2 mt-8 px-8 text-red-500 p-2 rounded-sm bg-white border hover:bg-rose-500 hover:text-white transition-all btn_connect items-center">
                        @csrf
                        @method('delete')
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <button type="submit">Déconnecter</button>
                    </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>
<div
    class="fixed sidebar_acceuil top-0 bottom-0 left-[-16rem] h-full min-[700px]:hidden z-50 shadow-lg transition-all w-[16rem] bg-white overflow-y-auto">
    <div class="flex flex-col gap-16">
        <div class="flex flex-row justify-between mx-1 border-b-2 p-3 items-center">
            <span class="text-rose-500 font-semibold text-lg">Menu</span>
            <i class="fa-solid fa-close cursor-pointer text-base close_menu_acceuil"></i>
        </div>
        <div class="flex items-center p-3 gap-1 border rounded-lg h-10 mx-5">
            <input class="p-2 bg-white  text-gray-600 w-full focus:outline-none text-sm" type="text" name=""
                id="" placeholder="Chercher un produit ici !" />
            <i class="fa-solid fa-search mx-1"></i>
        </div>
        <div class="flex flex-col gap-3">
            <a href=""
                class="p-1 border-b-2 text-gray-700 text-center mx-16 hover:text-rose-600 hover:border-rose-500 transition-all">Acceuil</a>
            <a href=""
                class="p-1 border-b-2 text-gray-700 text-center mx-16 hover:text-rose-600 hover:border-rose-500 transition-all">Catégories</a>
            <a href=""
                class="p-1 border-b-2 text-gray-700 text-center mx-16 hover:text-rose-600 hover:border-rose-500 transition-all">Contact</a>
            <a href=""
                class="p-1 border-b-2 text-gray-700 text-center mx-16 hover:text-rose-600 hover:border-rose-500 transition-all">Offres</a>
            <a href=""
                class="p-1 border-b-2 text-gray-700 text-center mx-16 hover:text-rose-600 hover:border-rose-500 transition-all">lien</a>

        </div>
        <div class="flex flex-col justify-center items-center">

            <div class="flex flex-row gap-3 p-6">
                <i
                    class="fa-brands fa-instagram p-1 bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
                <i
                    class="fa-brands fa-facebook p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
                <i
                    class="fa-brands fa-twitter p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
                <i
                    class="fa-brands fa-linkedin p-1  bg-gray-200 rounded-md font-bold hover:bg-rose-300 transition-all cursor-pointer"></i>
            </div>
            <div class="flex flex-row items-center gap-4">
                <span class="border p-1">Langue</span>
                <select class="bg-white cursor-pointer">
                    <option>Français</option>
                    <option>Anglais</option>
                    <option>Arabe</option>
                </select>
            </div>

        </div>
    </div>
</div>
