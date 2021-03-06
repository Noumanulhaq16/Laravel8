<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> name = 'Test';
        $user -> email = 'Test@hnh.com';
        $user -> password = Hash::make('12345678');
        $user -> confirm_password = Hash::make('12345678');
        $user->save();
    }
}
