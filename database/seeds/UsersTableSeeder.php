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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin0123'),
        ]);

        \App\Models\User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('test0123'),
        ]);
    }
}
