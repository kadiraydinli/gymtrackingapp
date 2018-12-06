<?php

use App\Diet;
use Illuminate\Database\Seeder;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diet::add([
            'day' => 1,
            'note' => 'Peynir',
            'meal' => 'Sabah',
            'user_id' => 1
        ]);
        Diet::add([
            'day' => 1,
            'note' => 'Zeytin',
            'meal' => 'Öğle',
            'user_id' => 1
        ]);
        Diet::add([
            'day' => 1,
            'note' => 'Çorba',
            'meal' => 'Akşam',
            'user_id' => 1
        ]);

        Diet::add([
            'day' => 2,
            'note' => 'Peynir1',
            'meal' => 'Sabah',
            'user_id' => 1
        ]);
        Diet::add([
            'day' => 2,
            'note' => 'Zeytin1',
            'meal' => 'Öğle',
            'user_id' => 1
        ]);
        Diet::add([
            'day' => 2,
            'note' => 'Çorba1',
            'meal' => 'Akşam',
            'user_id' => 1
        ]);

        Diet::add([
            'day' => 1,
            'note' => 'Peynir',
            'meal' => 'Sabah',
            'user_id' => 2
        ]);
        Diet::add([
            'day' => 1,
            'note' => 'Zeytin',
            'meal' => 'Öğle',
            'user_id' => 2
        ]);
        Diet::add([
            'day' => 1,
            'note' => 'Çorba',
            'meal' => 'Akşam',
            'user_id' => 2
        ]);
    }
}
