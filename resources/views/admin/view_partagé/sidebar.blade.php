  <div class="2xl:w-80 max-[1000px]:hidden max-[1000px]:w-screen  sidbar flex-col w-44 p-3 bg-white text-gray-800 overflow-auto text-sm transition-all z-50">
      <div class="flex gap-2 px-2 py-3 items-center max-[1000px]:justify-center">
          <img src="{{ asset('images/favicon.svg') }}" class="2xl:h-9 2xl:w-9 h-6 w-6"/>
          <span class="2xl:text-xl text-base font-extrabold"><span class="text-red-500">E-</span>commerce</span>
          <div class="btn_close_sidbar hidden max-[1000px]:block max-[1000px]:absolute max-[1000px]:top-3 max-[1000px]:right-3">
            <i class="fa-solid fa-close text-base cursor-pointer ml-8">
            </i>
          </div>
      </div>
      <div class="flex flex-col  py-2 flex-1 2xl:text-lg max-[1000px]:items-center">
          <a href="" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-home"></i>
              <span>Dashboard</span>
          </a>
          <a href="" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-users"></i>
              <span>Utilisateurs</span>
          </a>
          <a href="" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-file-invoice"></i>
              <span>Commandes</span>
          </a>
          <a href="{{route('admin.produit.index')}}" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-cart-shopping"></i>
              <span>Produits</span>
          </a>
          <a href="" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-truck"></i>
              <span>Livraison</span>
          </a>
      </div>
      <div class="flex flex-col mt-28 2xl:text-lg max-[1000px]:items-center">
          <button href="" class="open_parametre flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-gear"></i>
              <span>Paramètres</span>
          </button>
          <a href="" class="flex gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-circle-question"></i>
              <span>Aide</span>
          </a>
          <a href="" class="flex text-red-500 gap-2 items-center px-3 py-2 hover:ml-3 transition-all">
              <i class="fa-solid fa-right-to-bracket"></i>
              <span>Déconnecter</span>
          </a>
      </div>
  </div>
