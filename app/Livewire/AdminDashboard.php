<?php

namespace App\Livewire;

use Livewire\Component;


class AdminDashboard extends Component
{
    public $currentUrl;

    public function render()
    {

        // Mendapatkan URL saat ini dari browser.
        // Memecah URL berdasarkan karakter '/' menjadi array.
        // Menampilkan hasil array menggunakan dd()dump die untuk debugging.
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);

        $this->currentUrl = $explode_url[3].' '.$explode_url[4];

        return view('livewire.admin-dashboard')
            ->layout('admin-layout'); // Path sesuai lokasi file di views/admin-layout.blade.php
    }
}

