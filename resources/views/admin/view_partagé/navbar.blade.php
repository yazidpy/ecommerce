<div class="bg-white 2xl:h-20 h-16 shadow-md flex px-4 justify-between items-center max-[1000px]:fixed max-[1000px]:top-0  max-[1000px]:right-0 max-[1000px]:left-0 ">
    <div class="hidden max-[1000px]:block btn_open_sidbar">
    <i class="fa-solid fa-bars cursor-pointer"></i>
</div>
    <div class="flex items-center border-2 p-2">
        <input type="text" name="" id="" placeholder="Chercher ici !" class="2xl:w-[15rem] 2xl:text-lg text-sm focus:outline-none w-[10rem]">
        <i class="fa-solid fa-search text-gray-500 cursor-pointer 2xl:text-lg"></i>
    </div>
    <div class="flex justify-between items-center gap-4 mr-2">
        <div class="cursor-pointer text-gray-700 ">
            <i class="fa-regular fa-message hover:text-lg transition-all text-sm 2xl:text-xl 2xl:hover:text-2xl"></i>
        </div>
        <div class="cursor-pointer inline-flex text-gray-700">
            <i class="fa-regular fa-bell hover:text-lg transition-all text-sm 2xl:text-xl 2xl:hover:text-2xl"></i>
        </div>
        <div class="cursor-pointer flex flex-row items-center gap-1">
            <img src="{{asset('images/Me.JPG')}}" alt="" class="h-8 w-8 2xl:h-12 2xl:w-12 rounded-full transition-all">
            <i class="fa-solid fa-ellipsis-vertical photo"></i>
            <div class="profile_hover transition-all shad absolute top-16 2xl:w-[15rem] p-2 w-[10rem] right-5 flex-col justify-between bg-white text-gray-800 gap-2 text-sm hidden">
                <i class="fermer_menu_profile fa-solid fa-close absolute top-1 right-1 text-sm 2xl:text-lg"></i>
                <a href="" class="p-2 cursor-pointer hover:bg-slate-50 transition-all text-sm 2xl:text-lg">Votre profil</a>
                <a href="" class="p-2 cursor-pointer hover:bg-slate-50 transition-all text-sm 2xl:text-lg">Paramètre</a>
                <a href="" class="p-2 cursor-pointer hover:bg-slate-50 transition-all text-sm 2xl:text-lg">Déconnecter</a>
            </div>
        </div>
    </div>

</div>
