<?php

use App\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercise::add([
            'exercise_name' => 'Mekik',
            'explanation' => 'Mekik çek',
            'region' => 'Bölge',
            'image_link' => 'www.google.com'
        ]);
    }
}
