<header class="bg-white shadow-sm">
<<<<<<< HEAD
=======

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-teal-600" href="#">
      <span class="sr-only">Home</span>
      <!--logo-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50" class="w-full h-full">
          <g fill="none" stroke="currentColor" stroke-width="3">
            <!-- Smartphone icon -->
            <rect x="10" y="10" width="30" height="50" rx="5" ry="5" stroke="black" />
            <circle cx="25" cy="45" r="3" fill="black" />
<<<<<<< HEAD
=======

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

                <a class="text-black font-bold transition hover:text-black/75" href="/Xdetails"> Xdetails </a>

                {{-- <a class="text-black font-bold transition hover:text-black/75" href="/all/products"> Explore More </a> --}}

            </li>

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
            
            <!-- Xphone text -->
            <text x="60" y="40" font-family="Arial, sans-serif" font-size="30" fill="black">Xphone</text>
          </g>
        </svg>
        
    </a>
<<<<<<< HEAD
=======


    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/"> Home </a>
          </li>
          <li>
>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d

    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/"> Home </a>
          </li>
          <li>

              <a class="text-black font-bold transition hover:text-black/75" href="/all/products"> Xdetails </a>

              {{-- <a class="text-black font-bold transition hover:text-black/75" href="/all/products"> Explore More </a> --}}

          </li>
          
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/about"> About </a>
          </li>
          
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/contacts"> Contacts </a>
          </li>


          <li>
            <a href="/view-pdf"> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
              </svg>
            </a>
        </li>
          

          <!-- pdf -->
          {{-- <li>
            <a class="text-black font-bold transition hover:text-black/75" href="{{ url('/pdf-generate') }}"> Download PDF </a>
        </li> --}}
        

        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4 ">

          <!--cart-->
          @if (auth()->check())
          <livewire:shopping-cart-icon />

          {{-- <button wire:navigate wire:click="logout()" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-gray-100">

          {{-- <button wire:navigate" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-gray-100">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg> 
          </button> --}}

          <a href="{{ route('profile') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
            </svg>
            
          </a>

          <div class="flex items-center gap-4">
            <button>
              
<<<<<<< HEAD
            <!-- Profile icon -->
            <a href="/admin/dashboard">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-7"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
              >
            
=======
            </a>

        @else
        <a
        class="group relative inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500"
        href="/login"
      >
        <span class="absolute -end-full transition-all group-hover:end-4">
          <svg
            class="size-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </span>
      
        <span class="text-sm font-medium transition-all group-hover:me-4"> Login </span>
      </a>
        @endif
                  


              <a class="text-black font-bold transition hover:text-black/75" href="/all/products"> Explore More </a>

              {{-- <a class="text-black font-bold transition hover:text-black/75" href="/all/products"> Explore More </a> --}}

          </li>
          
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/about"> About </a>
          </li>
          
          <li>
              <a class="text-black font-bold transition hover:text-black/75" href="/contacts"> Contacts </a>
          </li>


          <li>
            <a class="text-black font-bold transition hover:text-black/75" href="/view-pdf"> Print </a>
        </li>
          

          <!-- pdf -->
          {{-- <li>
            <a class="text-black font-bold transition hover:text-black/75" href="{{ url('/pdf-generate') }}"> Download PDF </a>
        </li> --}}
        

        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4 ">

          <!--cart-->
          @if (auth()->check())
          <livewire:shopping-cart-icon />

          {{-- <button wire:navigate wire:click="logout()" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-gray-100">

          {{-- <button wire:navigate" class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-gray-100">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg> 
          </button> --}}

          <a href="{{ route('profile') }}">Profile</a>

          <div class="flex items-center gap-4">
            <button>
              
            <!-- Profile icon -->
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-8"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            >
>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
            
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"
                />
              </svg>
            </button>
          </div>
        </a>


          <!--logout ann1-->
          <a href="/auth/logout">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            
          </a>

      @else
      <a
      class="group relative inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500"
      href="/login"
    >
      <span class="absolute -end-full transition-all group-hover:end-4">
        <svg
          class="size-5 rtl:rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M17 8l4 4m0 0l-4 4m4-4H3"
          />
        </svg>
      </span>
    
      <span class="text-sm font-medium transition-all group-hover:me-4"> Login </span>
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
<<<<<<< HEAD
  </div>
</header>
<!--anin-->
=======

  </div>
</header>
<!--anin-->

  </header>
  <!--Bima-->

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
