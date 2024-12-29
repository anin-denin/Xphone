<header class="bg-white shadow-sm">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
      <a class="block text-teal-600" href="#">
        <span class="sr-only">Home</span>
        <!--logo-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50" class="w-full h-full">
            <g fill="none" stroke="currentColor" stroke-width="3">
              <!-- Smartphone icon -->
              <rect x="10" y="10" width="30" height="50" rx="5" ry="5" stroke="black" />
              <circle cx="25" cy="45" r="3" fill="black" />
              
              <!-- Xphone text -->
              <text x="60" y="40" font-family="Arial, sans-serif" font-size="30" fill="black">Xphone</text>
            </g>
          </svg>
          
      </a>
  
      <div class="flex flex-1 items-center justify-end md:justify-between">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
                <a class="text-black font-bold transition hover:text-black/75" href="/"> Home </a>
            </li>
            <li>
                <a class="text-black font-bold transition hover:text-black/75" href=""> Explore More </a>
            </li>
            
            <li>
                <a class="text-black font-bold transition hover:text-black/75" href="/about"> About </a>
            </li>
            
            <li>
                <a class="text-black font-bold transition hover:text-black/75" href="/contacts"> Contacts </a>
            </li>

            <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/view-pdf"> Pdf </a>
          </li>
            
          </ul>
        </nav>
  
        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4 ">

            <!--cart-->
            @if (auth()->check())
            <livewire:shopping-cart-icon />
            {{-- <button wire:navigate wire:click="logout()" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg> 
            </button> --}}

            <!--logout ann1-->
            <a href="/auth/logout">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
        @else
          <a
            class="block rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
            href="/login"
          >
            Get Started
          </a>
        @endif
                  

          </div>
  
          <button
            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
          >
            <span class="sr-only">Toggle menu</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!--anin-->