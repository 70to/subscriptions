<?php

namespace App\Console\Commands;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Console\Command;

class TweetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {

            $token = $user->token;
            $token_secret = $user->token_secret;

            $str = "■契約中サブスク\r\n\r\n";

            $sum = 0;
            foreach ($user->subscriptions as $subscription){
                $sum += $subscription->month_price;
                $str .= "・{$this->getSubscriptionPriceStr($subscription)}\r\n";
            }

            $str .= "\r\n合計: {$sum} 円/月";

            $str .= "\r\n".route('subscriptions.index', $user->slug);

            if (isset($token) && isset($token_secret)) {
                $connection = new TwitterOAuth(config('services.twitter.client_id'), config('services.twitter.client_secret'), $token, $token_secret);
                $connection->post("statuses/update", ["status" => $str]);
            }
        }
    }

    private function getSubscriptionPriceStr(Subscription $subscription)
    {
        if ($subscription->cycle_id === 1){
            return "{$subscription->name} {$subscription->price}円/月";
        } elseif ($subscription->cycle_id === 2) {
            return "{$subscription->name} {$subscription->month_price}円/月({$subscription->price}円/年)";
        }
    }
}
