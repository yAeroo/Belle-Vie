<header class="bg-[#f87171] md:z-40">
  <nav class="flex justify-between items-center w-[92%] mx-auto md:z-40">
      <div class="md:z-0">
          <a href="/">
              <img class="w-16 cursor-pointer mx-2 my-2 md:z-40" src="img/favicon.png" alt="...">
          </a>
      </div>
      <div
          class="nav-links ml-auto duration-500 md:static absolute bg-[#f87171] md:min-h-fit 
          min-h-[15vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5 md:z-0">
          <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-gray-50 md:z-0">
              <li>
                  <a class="hover:text-gray-200 z-0" href="{{ route('login') }}">Iniciar Sesión</a>
              </li>
              <li>
                  <a class="hover:text-gray-200 " href="{{ route('register') }}">Registrarse</a>
              </li>
          </ul>
      </div>
      <div class="flex items-center gap-6 sm:gap-[1.75rem] md:z-0">
          <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden md:z-0"></ion-icon>
      </div>
</header>



<script>
  const navLinks = document.querySelector('.nav-links')
  function onToggleMenu(e){
      e.name = e.name === 'menu' ? 'close' : 'menu'
      navLinks.classList.toggle('top-[9%]')
  }
</script>