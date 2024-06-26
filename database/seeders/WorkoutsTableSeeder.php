<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('workouts')->insert([
            [
                'date' => now(),
                'author_id' => 1, // Assuming 1 is the ID for the 'admin' user
                'muscle_group' => 'Chest',
                'rating' => 5,
                'description' => 'Bench press, push-ups, chest flyes',
            ],
            [
                'date' => now(),
                'author_id' => 2, // Assuming 2 is the ID for the 'regular user'
                'muscle_group' => 'Back',
                'rating' => 4,
                'description' => 'Pull-ups, rows, deadlifts',
            ],
        ]);
    }
}

