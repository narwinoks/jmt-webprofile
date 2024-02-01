<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new User();
        $model->name = 'Win';
        $model->email = 'narnowin00@gmail.com';
        $model->password = Hash::make('password');
        $model->role_id = 1;
        $model->save();
    }
}
