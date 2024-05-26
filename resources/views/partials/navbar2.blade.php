<nav class="fixed top-0 w-full z-20 bg-gradient-to-r from-teal-600 to-cyan-300 shadow-md" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      @auth
      <div class="relative flex h-16 items-center justify-between p-4">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu"
            aria-expanded="false"
            x-on:click="open = ! open"
          >
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="block h-8 w-auto lg:hidden" src="../image/logo sibook with text white.png" alt="Your Company" />
            <img class="hidden h-8 w-auto lg:block" src="../image/logo sibook with text white.png" alt="Your Company" />
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- NAVBAR OPTION -->
              <a href="/home" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium ">Home</a>
              <a href="/blog" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium">Post</a>
              {{-- <a href="/dashboard/bookmarks/indeks" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium">Koleksi</a> --}}
              <a href="/dashboard/posts" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium">Unggah</a>
              
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          
          
          <h4 class="text-base text-white">{{ auth()->user()->name }}</h4>

          <!-- Profile dropdown -->
          <div class="relative ml-3" x-data="{ open: false}">
            <div>
              <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" x-on:click="open = ! open">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
              </button>
            </div>

            <div
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu"
              aria-orientation="vertical"
              aria-labelledby="user-menu-button"
              tabindex="-1"
              x-show="open"
              x-on:click.outside="open = false"
              x-transition.scale.origin.right
            >
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">My Profile</a>
              <a href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Log out</a>
            </div>
          </div>
        </div>
      </div>
      @else

      {{-- Guest mode --}}
      <div class="relative flex h-16 items-center justify-between p-4">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu"
            aria-expanded="false"
            x-on:click="open = ! open"
          >
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="block h-8 w-auto lg:hidden" src="../image/logo sibook with text white.png" alt="Your Company" />
            <img class="hidden h-8 w-auto lg:block" src="../image/logo sibook with text white.png" alt="Your Company" />
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- NAVBAR OPTION -->
              <a href="/home" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium ">Dashboard</a>
              <a href="/blog" class="text-white hover:bg-white hover:text-teal-500 hover:bg-opacity-50 rounded-md px-3 py-2 text-sm font-medium">Post</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <a href="/login" class="text-white bg-cyan-600 hover:text-teal-500 hover:bg-opacity-80 rounded-md px-3 py-2 text-sm font-medium">Login</a>
        </div>
      </div>
    
      @endauth
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/home" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Home</a>
        <a href="/blog" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Post</a>
        @auth
        <a href="/dashboard/bookmarks/indeks" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Koleksi</a>
        <a href="/dashboard/posts" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Unggah</a>
        @else
        
        <a href="/login" class="text-white hover:bg-white hover:bg-opacity-80 hover:text-teal-500 block rounded-md px-3 py-2 text-base font-medium">Login</a>
        @endauth
      </div>
    </div>
  </nav>

  <style>
    .nav {
      position:fixed;
      z-index: 100;
    }
  </style>
