<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Lakukan apapun yang diperlukan untuk menampilkan profil pengguna
        // Misalnya, dapat mengambil data pengguna dari model User
        $user = auth()->user();

        return view('users.profile', compact('user'));
    }
}
