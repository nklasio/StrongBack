<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(['name'=>'Administrator', 'email' => 'administrator@strongback.xyz', 'password' => bcrypt(env('ADMINISTRATOR_DEFAULT_PASSWORD', 'password'))]);
    }
}
