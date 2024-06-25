<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users (adjust query as needed)

        return view('users', [
            'users' => $users,
        ]);
    }
}
