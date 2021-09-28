<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119125,
            "Nama" => "Muhammmad Surya Madani",
            "Gender" => "Laki-laki",
            "Phone" => 081392127719,
            "Class" => "XII RPL 4"
        ];
    }
}
