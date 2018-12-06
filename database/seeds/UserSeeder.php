<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('passport:client', [
            '--password' => true,
            '--name' => 'client key'
        ]);
        User::add([
            'name' => 'Kadir Aydınlı',
            'phone_number' => '05316743615',
            'email' => 'kadiraydinli.4@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => true
        ]);
        User::add([
            'name' => 'Yavuz Güloğlu',
            'phone_number' => '05071539337',
            'email' => 'yavuzguloglu@outlook.com',
            'password' => bcrypt('123456'),
            'admin' => false
        ]);
        User::add([
            'name' => 'Samet Emiroğlu',
            'phone_number' => '05316743614',
            'email' => 'sametemiroglu534@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => false
        ]);
    }
}
