<?php

use App\UserExercise;
use Illuminate\Database\Seeder;

class UserExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserExercise::add([
            'exercise_id' => 1,
            'user_id' => 1,
            'exercise_day' => 1,
            'sets' => 3,
            'reps' => 10
        ]);

        UserExercise::add([
            'exercise_id' => 1,
            'user_id' => 2,
            'exercise_day' => 3,
            'sets' => 3,
            'reps' => 20
        ]);
    }
}
