<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscription;

class MySubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'naotolog@gmail.com')->first();

        //Youtube Premium
        //1Password
        //PhpStorm
        //ドメイン
        //サーバー
        //dアニメストア
        //Amazon Prime

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 2,
                'name' => "Youtube Premium",
                'cycle_id' => 1,
                'price' => 1550,
                'first_bill' => "2019-02-26"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 5,
                'name' => "Amazon Prime",
                'cycle_id' => 2,
                'price' => 4900,
                'first_bill' => "2018-12-22"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 3,
                'name' => "Spotify",
                'cycle_id' => 2,
                'price' => 980,
                'first_bill' => "2019-06-21"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 7,
                'name' => "iCloud",
                'cycle_id' => 1,
                'price' => 130,
                'first_bill' => "2017-02-11"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 1,
                'name' => "Adobe",
                'cycle_id' => 1,
                'price' => 5680,
                'first_bill' => "2018-11-24"
            ]
        );


//        //https://mail.google.com/mail/u/0/#search/phpstorm/FMfcgxwBTsXbGXPFpPnxtTsBrfTXKnfl
//        Subscription::create(
//            [
//                'user_id' => $user->id,
//                'service_id' => 1,
//                'name' => "PhpStorm",
//                'cycle_id' => 2,
//                'price' => 13700,
//                'first_bill' => "2020-12-29"
//            ]
//        );
//
//        Subscription::create(
//            [
//                'user_id' => $user->id,
//                'service_id' => 1,
//                'name' => "1Password",
//                'cycle_id' => 2,
//                'price' => 3900,
//                'first_bill' => "2020-07-27"
//            ]
//        );
    }
}
