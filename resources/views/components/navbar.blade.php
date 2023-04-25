<nav className='flex justify-between rounded-2xl bg-black drop-shadow-md px-9 py-6 list-none '>
        <img src={Logo} alt="Logo" className='h-9 cursor-pointer'/>
        <div className="md:flex hidden items-center gap-10 text-white md:my-0 my-7">
          <NavLinks />
        </div>
        <IoIosMenu className="md:hidden text-white text-2xl cursor-pointer my-2 list-none" onClick={handleMenuClick} />
      </nav>
      {showMenu && (
        <div className="md:hidden flex flex-col items-center justify-center gap-5 py-3 my-1 text-white list-none bg-black rounded-t-lg rounded-2xl">
          <NavLinks />
        </div>