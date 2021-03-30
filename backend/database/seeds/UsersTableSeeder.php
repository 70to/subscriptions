<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'test',
            'email' => 'test@example.com ',
            'password' => Hash::make('KfnWnzUBrB4eAkc'),
            'token' => 'test',
            'token_secret' => 'test',
        ]);
    }
}
