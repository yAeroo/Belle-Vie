

<!-- Eliminar "rounded-2xl" para lograr el Navbar cuadrado (y hacer los respectivos cambios en el componente que se requiera) -->
    <nav class='flex justify-between rounded-2xl bg-[#f87171] drop-shadow-md px-9 py-6 list-none '>
        <img src="{{ asset('img/favicon.png') }}" alt="Logo" class='h-9 cursor-pointer'/>
        <div class="md:flex hidden items-center gap-10 text-white md:my-0 my-7">
          <NavLinks />
        </div>
        <IoIosMenu class="md:hidden text-white text-2xl cursor-pointer my-2 list-none" onClick={handleMenuClick} />
      </nav>
      {showMenu && (
        <div class="md:hidden flex flex-col items-center justify-center gap-5 py-3 my-1 text-white list-none bg-black rounded-t-lg rounded-2xl">
          <NavLinks />
        </div>