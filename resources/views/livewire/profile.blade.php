<!-- Full Section with Gradient Background -->
<div class="min-h-screen bg-gradient-to-br from-[#F8E6F5] via-[#E8F3FC] to-[#FDF0FC] py-10 px-6 lg:px-8">
    <div class="max-w-4xl mx-auto bg-white bg-opacity-90 rounded-xl shadow-lg p-8">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Profile</h1>
            <p class="mt-2 text-gray-600">
                Update your profile information here.
            </p>
        </div>

        <!-- Notification Message -->
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                {{ session('message') }}
            </div>
        @endif

        <!-- Form Section -->
        <form wire:submit.prevent="updateProfile">
            <div class="grid gap-6 lg:gap-8">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" wire:model="name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" wire:model="email" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" wire:model="password" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
                    <p class="mt-1 text-xs text-gray-500">Leave blank if you do not want to change the password.</p>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-center">
                <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white text-sm font-medium rounded-lg hover:opacity-90 focus:outline-none">
                    Update Profile
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Syerly revisi -->