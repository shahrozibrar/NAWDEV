<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=([
            'id'  => 1,
           'name' => 'admin',
           'email' => 'nawdev23@gmail.com',
           'password' => Hash::make('nawdev2019'),

        ]);

        DB::disableQueryLog();
        DB::table('users')->insert($users);


    }
}
