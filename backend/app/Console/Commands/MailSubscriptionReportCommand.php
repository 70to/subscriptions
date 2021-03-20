<?php

namespace App\Console\Commands;

use App\Mail\SubscriptionReport;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailSubscriptionReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:subscription:report';

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
            //メールアドレスが登録されている場合
            if (isset($user->email)) {
                $this->mail($user);
            }
        }
    }

    private function mail(User $user)
    {
        $str = $user->getTweetBody("\r\n");
        Mail::to($user->email)->send(new SubscriptionReport($str));
    }
}
