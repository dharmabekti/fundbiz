<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use App\User;

class DonateShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $donator;
    public $data_donator;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // print_r($data);die();
        $this->donator = User::FindOrFail(Auth::user()->id);
        $this->data_donator = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped');
    }
}
