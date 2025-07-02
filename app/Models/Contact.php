<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'website',
        'message',
    ];
<<<<<<< HEAD

}
=======
}

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
