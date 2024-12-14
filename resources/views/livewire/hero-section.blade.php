<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">      
            <strong class="font-extrabold text-purple-700 sm:block">
                Welcome to <span class="text-teal-500">Xphone</span>, your ultimate destination for the perfect smartphone!
            </strong>
        </h1>
  
        <!--jan di ubah :DDDDDDDDDDD-->
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          @if (auth()->check())
				<a
				class="block w-full rounded bg-gradient-to-r from-blue-500 to-green-500 px-10 py-3 text-sm font-medium text-white shadow hover:from-blue-600 hover:to-green-600 focus:outline-none focus:ring active:from-blue-700 active:to-green-700 sm:w-auto"
				href="/offer">
					Buy Now!
				</a>
		
				<a
				class="block w-full rounded bg-gradient-to-r from-blue-500 to-green-500 px-10 py-3 text-sm font-medium text-white shadow hover:from-blue-600 hover:to-green-600 focus:outline-none focus:ring active:from-blue-700 active:to-green-700 sm:w-auto"
				href="#">
				Get your discount
				</a>
	  
			@else
				<a
				class="block w-full rounded bg-purple-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-purple-500 sm:w-auto"
				href="/auth/login"
				>
				Get Started
				</a>
          @endif
        
  
          <a
            class="block w-full rounded px-12 py-3 text-sm font-medium text-purple-600 shadow hover:text-purple-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
            href="#"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>

  </section>