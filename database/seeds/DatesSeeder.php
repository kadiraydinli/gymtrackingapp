<?php

use App\Dates;
use Illuminate\Database\Seeder;

class DatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dates::add([
            'user_id' => 2,
            'start_date' => '2018-12-1',
            'end_date' => '2018-12-30',
        ]);
        Dates::add([
            'user_id' => 3,
            'start_date' => '2018-12-1',
            'end_date' => '2019-01-30',
        ]);
    }
}
