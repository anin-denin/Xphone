<div class="p-6 max-w-4xl mx-auto bg-white shadow-lg rounded-md">
    <h2 class="text-xl font-semibold mb-4">Profil</h2>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateProfile">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" wire:model="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea id="alamat" wire:model="alamat" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
        </div>

        <div class="mb-4">
            <label for="tempat_tanggal_lahir" class="block text-sm font-medium text-gray-700">Tempat & Tanggal Lahir</label>
            <input type="text" id="tempat_tanggal_lahir" wire:model="tempat_tanggal_lahir" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div class="mb-4">
            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select id="jenis_kelamin" wire:model="jenis_kelamin" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <option value="">Pilih...</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="no_telp" class="block text-sm font-medium text-gray-700">No. Telepon</label>
            <input type="text" id="no_telp" wire:model="no_telp" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Perbarui Profil</button>
    </form>
</div>
