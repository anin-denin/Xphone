<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Browsershot\Browsershot;

class PDFcontroller extends Controller
{

    
    public function index(){
            return view('pdf.invoice');
    }

    public function downloadpdf(){

        $users = User::all();

        $html = view('pdf.invoice', [
            'users' => $users
        ])->render();

        Browsershot::html($html)
            // ->format('A4')
            ->margins(0, 10, 0, 0)
            ->transparentBackground()
            // ->setChromePath("C:\Program Files\Google\Chrome\Application\chrome.exe")
            ->newHeadless()
            ->save('invoice.pdf');

        return response()->download(public_path('invoice.pdf'));
    }

    
}