<?php

namespace IP\Events;

use IP\Modules\Payments\Models\Payment;
use Illuminate\Queue\SerializesModels;

class PaymentCreated extends Event
{
    use SerializesModels;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }
}
