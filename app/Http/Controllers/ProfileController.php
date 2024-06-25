<?php

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // Fetch the user's workouts (adjust this query based on your relationships)
        $workouts = $user->workouts()->get();

        return view('profile.show', [
            'user' => $user,
            'workouts' => $workouts,
        ]);
    }
}
