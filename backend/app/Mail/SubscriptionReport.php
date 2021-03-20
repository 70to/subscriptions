<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionReport extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $title;

    /**
     * Create a new message instance.
     *
     * @param string $body
     */
    public function __construct(string $body)
    {
        $this_month = Carbon::today()->month;
        $this->title = "{$this_month}月に契約中のサブスク一覧です。";
        $this->data['body'] = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.subscription_report')
            ->subject($this->title)
            ->with($this->data);
    }
}
