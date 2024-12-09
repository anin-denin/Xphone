<div>
    <livewire:bread-crumb :url="$currentUrl" />
<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gradient-to-r from-green-500 via-purple-500 to-blue-500">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7">
        <form wire:submit="save">
          <!-- Section -->
          <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
            <div class="sm:col-span-12">
              <h2 class="text-lg font-semibold text-black-800">
                Add New iPhone
              </h2>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-3">
              <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                Product Name
              </label>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-9">
              <div class="sm:flex">
                <input id="af-submit-application-full-name" type="text" wire:model="product_name"  class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-purple-500 focus:ring-purple-500">
                @error('product_name') <span class="text-red-500"> {{ $message }} </span> @enderror
            </div>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-3">
              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                Price
              </label>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-9">
              <input id="af-submit-application-email" wire:model="product_price" type="number" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-blue-500 focus:ring-blue-500">
            `  @error('product_price') <span class="text-red-500"> {{ $message }} </span> @enderror
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                  Xphone
              </label>
          </div>
          <!-- End Col -->

            <div class="sm:col-span-9">
                <select wire:model="category_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                  <option selected="">Select iPhone seri</option>
                  {{-- // Menampilkan daftar kategori sebagai opsi dalam elemen <option>, dengan nilai berdasarkan ID kategori dan teks berdasarkan nama kategori.
                  // ni tadi error disini (tandain dulu pake komen) by anin --}}
                  @foreach ($all_categories as $category)
                    <option value="{{ $category->id }}" wire:key="{{ $category->id }}">{{$category->name}}</option>
                  @endforeach
                  
                  </select>
                  @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
          <!-- End Col -->
      
            {{-- <div class="sm:col-span-3">
              <div class="inline-block">
                <label for="af-submit-application-phone" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                  Phone
                </label>
              </div>
            </div> --}}
            <!-- End Col -->
{{--       
            <div class="sm:col-span-9">
              <input id="af-submit-application-phone" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-blue-500 focus:ring-blue-500">
              <p class="mt-3">
                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="../docs/index.html">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                  Add phone
                </a>
              </p>
            </div> --}}
            <!-- End Col -->
      
            {{-- <div class="sm:col-span-3">
              <div class="inline-block">
                <label for="af-submit-application-current-company" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                  Current Company
                </label>
              </div>
            </div> --}}
            <!-- End Col -->
{{--       
            <div class="sm:col-span-9">
              <input id="af-submit-application-current-company" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-blue-500 focus:ring-blue-500">
            </div> --}}
            <!-- End Col -->
          </div>
          <!-- End Section -->
      
          <!-- Section -->
          <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
            <div class="sm:col-span-12">
              <h2 class="text-lg font-semibold text-black-800">
                More Details
              </h2>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-3">
              <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                Product Image 
              </label>
            </div>
            <!-- End Col -->
           
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = true" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" class="sm:col-span-9">
                <label for="file" class="sr-only">Choose Image</label>
                <input type="file" wire:model="photo" id="file" class="block w-full border  shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none white:bg-neutral-900 white:border-neutral-700 white:text-neutral-400 file:bg-gray-50 file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-4 white:file:bg-neutral-700 white:file:text-neutral-400">
                @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
                <!-- File Uploading Progress Form -->
                <div x-show="uploading">
                    <!-- Progress Bar -->
                    <div class="flex items-center gap-x-3 whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden white:bg-neutral-700" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-purple-600 text-xs text-black text-center whitespace-nowrap transition duration-500 dark:bg-purple-500" :style="`width: ${progress}%`"></div>
                        </div>
                        <div class="w-6 text-end">
                            <span class="text-sm text-black-800 white:text-white" x-text="`${progress}%`"></span>
                        </div>
                    </div>
                    <!-- End Progress Bar -->
                </div>
                <!-- End File Uploading Progress Form -->
            </div>
      
          
            <!-- End Col -->
      
            <div class="sm:col-span-3">
              <div class="inline-block">
                <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                  Product Description
                </label>
              </div>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-9">
              <textarea id="af-submit-application-bio" wire:model="product_description" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-blue-500 focus:ring-blue-500" rows="6" placeholder="Add description"></textarea>
              @error('product_description') <span class="error"> {{ $message }} </span> @enderror
            </div>
            <!-- End Col -->
          </div>
          <!-- End Section -->
      
          <!-- Submit Button -->
          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gradient-to-r from-green-500 via-purple-500 to-blue-500 text-white hover:from-green-600 hover:via-purple-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            <div wire:loading class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white-600 rounded-full" role="status" aria-label="loading">
              <span class="sr-only">Loading...</span>
            </div>
            Submit Product
          </button>   
          
        </form>
      </div>
</div>     