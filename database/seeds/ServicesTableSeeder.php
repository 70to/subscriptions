<?php

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Youtube',
                'color' => '#FF0000'
            ],
            [
                'name' => 'Spotify',
                'color' => '#1DB954'
            ],
            [
                'name' => 'Netflix',
                'color' => '#E50914'
            ],
            [
                'name' => 'Amazon',
                'color' => '#FF9900'
            ],
            [
                'name' => 'Playstation Plus',
                'color' => '#003087'
            ],
            [
                'name' => 'iCLoud',
                'color' => '#3080EB'
            ],
            [
                'name' => 'Apple Music',
                'color' => '#000000'
            ]
        ]);
    }
}
