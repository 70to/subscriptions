<?php

namespace App\Console\Commands;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\User;
use Illuminate\Console\Command;

class TweetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '契約しているサブスクの合計金額のOGPツイートする';

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
            $this->tweet($user);
        }
    }

    private function tweet(User $user)
    {
        $token = $user->token;
        $token_secret = $user->token_secret;

        $str = $user->getTweetBody("\r\n");

        if (isset($token) && isset($token_secret)) {
            $connection = new TwitterOAuth(config('services.twitter.client_id'), config('services.twitter.client_secret'), $token, $token_secret);
            $connection->post("statuses/update", ["status" => $str]);
        }
    }
}
