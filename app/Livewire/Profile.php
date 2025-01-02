<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = Auth::user();
        if ($user) {
            $user->name = $this->name;
            $user->email = $this->email;
            
            if (!empty($this->password)) {
                $user->password = bcrypt($this->password); // Enkripsi password sebelum menyimpan
            }

            $user->save(); // Menyimpan perubahan ke database

            session()->flash('message', 'Profil berhasil diperbarui.');
        } else {
            session()->flash('error', 'Pengguna tidak ditemukan.');
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
// syerly