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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'LilWayne',
            'email' => '0917388156ab@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
