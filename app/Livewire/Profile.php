<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User; // Mengambil model User
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name, $email, $alamat, $tempat_tanggal_lahir, $no_telp, $jenis_kelamin;

    // Load data pengguna saat komponen dimuat
    public function mount()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login

        // Memuat data pengguna dan data terkait dari tabel users
        $profile = User::find($user->id);

        // Mengisi nilai ke properti komponen
        $this->name = $profile->name;
        $this->email = $profile->email;
        $this->alamat = $profile->alamat ?? '';
        $this->tempat_tanggal_lahir = $profile->tempat_tanggal_lahir ?? '';
        $this->no_telp = $profile->no_telp ?? '';
        $this->jenis_kelamin = $profile->jenis_kelamin ?? '';
    }

    // Method untuk menyimpan perubahan profil
    public function updateProfile()
    {
        $user = Auth::user();
        $profile = User::find($user->id);
        $profile->name = $this->name;
        $profile->email = $this->email;
        $profile->alamat = $this->alamat;
        $profile->tempat_tanggal_lahir = $this->tempat_tanggal_lahir;
        $profile->no_telp = $this->no_telp;
        $profile->jenis_kelamin = $this->jenis_kelamin;
        $profile->save();

        session()->flash('message', 'Profil berhasil diperbarui.');

        $profile = User::find($user->id);
        if (!$profile) {
            $profile = new User();
            $user->user_id = $user->id;
        }


        session()->flash('message', 'Profil berhasil diperbarui.');
    }

    // Render tampilan komponen
    public function render()
    {
        return view('livewire.profile');
    }
}
