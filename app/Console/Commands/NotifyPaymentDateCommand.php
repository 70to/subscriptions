<?php

namespace App\Console\Commands;

use App\Mail\CommingPaymentDate;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;

class NotifyPaymentDateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:payment_date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var int
     */
    public static $day = 10;

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
        $today = Carbon::today();
        $subscriptions = Subscription::all();
        foreach ($subscriptions as $subscription) {
            if ($today->diffInDays($subscription->payment_date) <= self::$day) {
                $email = $subscription->user->email;
                Mail::to($email)->send(new CommingPaymentDate($subscription, self::$day));
                logger()->info($subscription->payment_date);
                logger()->info('Cronによるメール送信完了しました。');
            }
        }
    }
}
