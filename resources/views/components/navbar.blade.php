<header class="bg-[#f87171] font-body z-10">
    <nav class="flex justify-between items-center w-[92%] mx-auto z-10">
        <div>
            <a href="/">
                <img class="w-16 cursor-pointer mx-2 my-2" src="{{ asset('img/favicon.png') }}" alt="...">
            </a>
        </div>
        <div
            class="nav-links ml-auto duration-500 md:static absolute bg-[#f87171] md:min-h-fit min-h-[15vh] 
            left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 py-5 z-10">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-gray-50">
                <li>
                    <a class="hover:text-gray-200" href="{{ route('index') }}">Inicio</a>
                </li>
                <li>
                    <a class="hover:text-gray-200 " href="#">Propiedades</a>
                </li>
                @if (auth()->user()->type == 'owner')
                <li>
                    <a  class="hover:text-gray-200 " href="{{ route('place.list', auth()->user()) }}">Mis propiedades</a>
                </li>
                @endif
                <li>
                    <a  class="hover:text-gray-200 " href="{{ route('profile', auth()->user()) }}">Perfil</a>
                </li>
                <li>
                    <a class="hover:text-gray-200 " href="{{ route('logout') }}">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6 sm:gap-[1.75rem] ">
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden" color="light"></ion-icon>
        </div>
  </header>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e){
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[8%]')
    }
  </script>
  