<div class="bg-gray-100 shadow-sm rounded-lg hover:border border-purple-400">
    <a href="/product/details">
    <div>
        <img src="{{ asset('images/ip15.png') }}" alt="product-image" class="rounded object-cover" height="300px" width="300px">
    </div>
    <div>
        <h2 class = "line-clamp-4 px-6"> Discover the latest iPhone packed with innovative features.</h2>
        <div class="flex justify-between px-3 py-2 items-center">
            <div class="bg-pink-100 p-3 rounded-md">
                <h2 class="text-1xl font-bold text-black-800">iPhone</h2>
            </div>
            <h2 class="text-xl font-semibold text-gray-800"> 15Jt</h2>
        </div>
        <div class=" flex gap-2  justify-center w-full rounded-full bg-purple-700 px-10 py-2 text-center text-sm font-medium text-white shadow hover:bg-purple-600 focus:outline-none focus:ring active:bg-purple-500 sm:w-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>  
         
            <a class="" href="{{ auth()->check() ? '/add/to/cart' : '/auth/login'}}">                             
                Add to Cart
            </a>
        </div>
        
    </div>
</a>
</div>
   
