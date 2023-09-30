<div class="w-full bg-green2">
  <div class="navbar lg:w-3/4 mx-auto">
      <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-72">
            {{-- small screen navlinks --}}
              <li>
                  <a href="/home" class="text-white-600 hover:text-green_button font-medium ">Menu</a>
              </li>
              <li>
                  <a href="/belanja" class="text-white-600 hover:text-green_button font-medium">Belanja Sekarang</a>
              </li>
              <li>
                  <a href="/tentang_kami" class="text-white-600 hover:text-green_button font-medium">Tentang Kami</a>
              </li>
              <li>
                  <a href="/katalog" class="text-white-600 hover:text-green_button font-medium">Katalog</a>
              </li>
              <li>
                  <a href="/berita" class="text-white-600 hover:text-green_button font-medium">Berita</a>
              </li>
            
              <form action="/belanja" class="w-full">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mau beli apa..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
              </form>
          </ul>

        </div>
        {{-- sembako store logo --}}
        <img src="{{ asset('images/logo_sembako.png') }}" alt="logo-sembako" class="w-100">
      </div>

      <div class="navbar-center hidden lg:flex flex-col">
        <ul class="menu menu-horizontal px-1">
          {{-- large screen navlinks --}}
          <li>
              <a href="/home" class="text-white-600 hover:text-green_button font-medium ">Menu</a>
          </li>
          <li>
              <a href="/belanja" class="text-white-600 hover:text-green_button font-medium">Belanja Sekarang</a>
          </li>
          <li>
              <a href="/tentang_kami" class="text-white-600 hover:text-green_button font-medium">Tentang Kami</a>
          </li>
          <li>
              <a href="/katalog" class="text-white-600 hover:text-green_button font-medium">Katalog</a>
          </li>
          <li>
              <a href="/berita" class="text-white-600 hover:text-green_button font-medium">Berita</a>
          </li>
        </ul>

        {{-- Search input --}}
        <form action="/belanja" class="w-full">
          @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if(request('user'))
              <input type="hidden" name="user" value="{{ request('user') }}">
          @endif
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mau beli apa..." required>
              <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
          </div>
        </form>
      </div>

      <div class="navbar-end">
        <div class="mr-1">
          <a href="/login" class="btn btn-success text-white">Login</a>
        </div>
        <div>
          <a href="/register" class="btn btn-accent text-white">Daftar</a>
        </div>
      </div>

  </div>
</div>