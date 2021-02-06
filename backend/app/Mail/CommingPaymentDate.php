<?php

namespace App\Mail;

use App\Models\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommingPaymentDate extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscription, $days_to_payment_date)
    {
        $this->title = "【{$subscription->name}】支払い更新日{$days_to_payment_date}日前です。";
        $this->data['days_to_payment_date'] = $days_to_payment_date;
        $this->data['name'] = $subscription->name;
        $this->data['cycle'] = Subscription::CYCLE[$subscription->cycle_id]['unit'];
        $this->data['price'] = $subscription->price;
        $this->data['payment_date'] = $subscription->payment_date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notify_payment_date')
            ->subject($this->title)
            ->with($this->data);
    }
}
