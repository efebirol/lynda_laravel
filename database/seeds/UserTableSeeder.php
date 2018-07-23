<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Füge eine User "admin" hinzu in die Tabelle "users"
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('123456789'),
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'birol',
                'email' => 'birol@gmail.com',
                'password' => bcrypt('test'),
            ]
        );
    }
}
