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

        //https://mail.google.com/mail/u/0/#search/phpstorm/FMfcgxwBTsXbGXPFpPnxtTsBrfTXKnfl
        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 1,
                'name' => "PhpStorm",
                'cycle_id' => 2,
                'price' => 13700,
                'first_bill' => "2020-12-29"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 1,
                'name' => "1Password",
                'cycle_id' => 2,
                'price' => 3900,
                'first_bill' => "2020-07-27"
            ]
        );

        Subscription::create(
            [
                'user_id' => $user->id,
                'service_id' => 1,
                'name' => "1Password",
                'cycle_id' => 2,
                'price' => 3900,
                'first_bill' => "2020-07-27"
            ]
        );
    }
}
