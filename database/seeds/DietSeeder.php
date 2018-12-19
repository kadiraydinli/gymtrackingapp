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
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'Sabah',
            'content' => 'Elma ye',
            'time' => '08:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
        Diet::add([
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'Kuşluk',
            'content' => 'Armut ye',
            'time' => '10:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
        Diet::add([
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'Öğle',
            'content' => 'Yemek ye',
            'time' => '12:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
        Diet::add([
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'İkindi',
            'content' => 'Yemek yeme',
            'time' => '16:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
        Diet::add([
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'Akşam',
            'content' => 'ye ye',
            'time' => '20:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
        Diet::add([
            'user_id' => 2,
            'type' => 'Kilo verme',
            'meal' => 'Ara',
            'content' => 'Ekmek',
            'time' => '23:00',
            'start_date' => '2018-12-08',
            'end_date' => '2018-12-08'
        ]);
    }
}
