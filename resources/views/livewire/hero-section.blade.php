<section class="bg-gradient-to-br from-[#F8E6F5] via-[#E8F3FC] to-[#FDF0FC]">
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
        class="inline-block rounded bg-teal-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
        href="#"
        >
        Buy Now!
        </a>
  
      <a
      class="inline-block rounded bg-purple-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
      href="#"
      >
      Get Your Discount!
      </a>
      
    @else
      <a
      class="inline-block rounded bg-purple-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
      href="/login"
      >
      Get Started
      </a>
        @endif
      
      <a
        class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-purple-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500"
        href="/Xdetails"
      >
        Xdetails
      </a>
      </div>
    </div>
  </div>
</section>
