<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log; // Menambahkan import untuk Log
use App\Models\Contact; // Menambahkan import untuk Contact model

class Contacts extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $company;
    public $website;
    public $message;
    public $terms = false;

    public function submit()
    {
        // Validasi data yang diterima
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);
    
        // Mencatat log untuk memastikan data tervalidasi dengan benar
        Log::info('Validated Data:', $validatedData);
    
        // Menyimpan data ke dalam tabel contacts
        Contact::create($validatedData);
    
        // Menampilkan pesan sukses
        session()->flash('success', 'Thank you for contacting us!');
    }
    

    public function render()
    {
        return view('livewire.contacts');
    }
}
//syerly