<?php

use Illuminate\Database\Seeder;
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
                'name' => 'Custom',
                'color' => '#6b7280'
            ],
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
                'name' => 'iCloud',
                'color' => '#3080EB'
            ],
            [
                'name' => 'Apple Music',
                'color' => '#000000'
            ],
            [
                'name' => 'Evernote',
                'color' => '#00a82d'
            ],
            [
                'name' => 'Dropbox',
                'color' => '#007ee5'
            ],
            [
                'name' => 'Google Play Music',
                'color' => '#dd4b39'
            ],
            [
                'name' => 'Line Music',
                'color' => '#00c300'
            ],
            [
                'name' => 'Hulu',
                'color' => '#66aa33'
            ],
            [
                'name' => 'dTV',
                'color' => '#DF0730'
            ],
        ]);
    }
}
