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
                Add New Seri iPhone & Color
              </h2>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-3">
              <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-black-500 mt-2.5">
                iPhone & Color Name
              </label>
            </div>
            <!-- End Col -->
      
            <div class="sm:col-span-9">
              <div class="sm:flex">
                <input id="af-submit-application-full-name" type="text" wire:model="category_name"  class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm bg-gray-200 text-black rounded-lg focus:border-purple-500 focus:ring-purple-500">
                @error('category_name') <span class="text-red-500"> {{ $message }} </span> @enderror
            </div>
            </div>
            <!-- End Col -->


          <!-- Submit Button -->
          <button type="submit" class="w-full min-w-[150px] py-3 px-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gradient-to-r from-green-500 via-purple-500 to-blue-500 text-white hover:from-green-600 hover:via-purple-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            <div wire:loading class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white-600 rounded-full" role="status" aria-label="loading">
              <span class="sr-only">Loading...</span>
            </div>
            Submit Product
          </button>
            
          
        </form>
      </div>
</div>     