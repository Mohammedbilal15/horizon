<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use App\Models\Order;

class MailController extends Controller
{
    public function index() {

        $order = Order::findOrFail( rand(1,50) );

        $recipient = 'hello@example.com';

        Mail::to($recipient)->send(new OrderShipped($order));

        return 'Sent order ' . $order->id;
    }
}
