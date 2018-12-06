<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DietSeeder::class);
        $this->call(ExerciseSeeder::class);
        $this->call(UserExerciseSeeder::class);
        $this->call(DatesSeeder::class);
    }
}
