<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'workout_id' => 1, // Assuming 1 is the ID for a workout
                'user_id' => 2, // Assuming 2 is the ID for the 'regular user'
                'comment' => 'Great workout!',
            ],
            [
                'workout_id' => 2, // Assuming 2 is the ID for another workout
                'user_id' => 1, // Assuming 1 is the ID for the 'admin' user
                'comment' => 'Keep up the good work!',
            ],
        ]);
    }
}

