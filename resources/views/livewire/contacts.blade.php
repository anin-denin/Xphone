<div class="min-h-screen bg-gradient-to-br from-[#F8E6F5] via-[#E8F3FC] to-[#FDF0FC] py-10 px-6 lg:px-8">
    <div class="max-w-4xl mx-auto bg-white bg-opacity-90 rounded-xl shadow-lg p-8">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1>
            <p class="mt-2 text-gray-600">
                We would love to hear from you! Fill out the form below and we’ll get in touch soon.
            </p>
        </div>

<<<<<<< HEAD
=======
  
>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
        <!-- Form Section -->
        <form wire:submit.prevent="submit">
            <div class="grid gap-6 lg:gap-8">
                <!-- Name Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="first-name" wire:model="first_name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="John">
                        @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last-name" wire:model="last_name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Doe">
                        @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" wire:model="email" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="example@email.com">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Company Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                        <input type="text" id="company" wire:model="company" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Your Company">
                        @error('company') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-700">Company Website</label>
                        <input type="url" id="website" wire:model="website" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="https://yourcompany.com">
                        @error('website') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" wire:model="message" rows="4" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Write your message here..."></textarea>
                    @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Checkbox -->
            <div class="flex items-start mt-6">
                <input id="terms" wire:model="terms" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                <label for="terms" class="ml-3 text-sm text-gray-600">
                    I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a>.
                </label>
                @error('terms') <span class="text-red-500 text-sm ml-3">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-center">
                <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white text-sm font-medium rounded-lg hover:opacity-90 focus:outline-none">
                    Send Message
                </button>
            </div>
        </form>

        @if (session()->has('success'))
            <div class="mt-4 text-center text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif
    </div>
<<<<<<< HEAD
</div>
=======
  </div>

  <div class="max-w-4xl mx-auto bg-white bg-opacity-90 rounded-xl shadow-lg p-8">
      <!-- Title Section -->
      <div class="text-center mb-8">
          <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1>
          <p class="mt-2 text-gray-600">
              We would love to hear from you! Fill out the form below and we’ll get in touch soon.
          </p>
      </div>


        <!-- Form Section -->
        <form wire:submit.prevent="submit">
            <div class="grid gap-6 lg:gap-8">
                <!-- Name Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" id="first-name" wire:model="first_name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="John">
                        @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" id="last-name" wire:model="last_name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Doe">
                        @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" wire:model="email" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="example@email.com">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Company Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                        <input type="text" id="company" wire:model="company" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Your Company">
                        @error('company') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-700">Company Website</label>
                        <input type="url" id="website" wire:model="website" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="https://yourcompany.com">
                        @error('website') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" wire:model="message" rows="4" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Write your message here..."></textarea>
                    @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Checkbox -->
            <div class="flex items-start mt-6">
                <input id="terms" wire:model="terms" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                <label for="terms" class="ml-3 text-sm text-gray-600">
                    I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a>.
                </label>
                @error('terms') <span class="text-red-500 text-sm ml-3">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-center">
                <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white text-sm font-medium rounded-lg hover:opacity-90 focus:outline-none">
                    Send Message
                </button>
            </div>
        </form>

        @if (session()->has('success'))
            <div class="mt-4 text-center text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
<!-- Syerly -->

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
