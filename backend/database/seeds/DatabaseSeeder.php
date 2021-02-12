<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
//        $this->call(MySubscriptionsSeeder::class);
//        if (App::environment() === "local"){
//            $this->call(UsersTableSeeder::class);
//            $this->call(SubscriptionsForScreenshotSeeder::class);
//        }
    }
}