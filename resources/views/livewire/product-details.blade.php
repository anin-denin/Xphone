<div class="min-h-screen bg-gray-100">
    <!-- Center Content -->
    <div class="max-w-screen-lg mx-auto p-6 flex gap-10">
        <!-- Image Section -->
        <div class="w-[300px] h-[300px]">
            <img src="{{ asset('images/ip15.png') }}" alt="product-image" class="rounded object-cover w-full h-full">
        </div>
        
        <!-- Product Details Section -->
        <div class="flex flex-col justify-between w-full">
            <!-- Product Title and Description -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">iPhone</h2>
                <p class="text-gray-600 text-lg mb-4">
                    Discover the latest iPhone packed with innovative features.
                </p>
                <h2 class="text-2xl font-semibold text-gray-800">15Jt</h2>
            </div>

            <!-- Add to Cart Button -->
            <div class="mt-6">
                <a class="flex gap-2 justify-center w-full rounded-full bg-purple-700 px-10 py-3 text-center text-sm font-medium text-white shadow hover:bg-purple-600 focus:outline-none focus:ring active:bg-purple-500 sm:w-auto" href="#"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>  
                    <span>Add to Cart</span> 
                </a>
            </div>
        </div>
    </div>

    <!-- related products -->
    <div class="my-5 px-20 pt-5">
        <h2 class ="text-2xl font-medium">Second Products</h2>
        <livewire:product-listing />
    </div>
</div>
