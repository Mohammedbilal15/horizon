<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    /**
     * Create a new message instance.

     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped');
    }
}
