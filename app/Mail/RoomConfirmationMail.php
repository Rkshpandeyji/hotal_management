<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RoomConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    // Add any necessary properties to pass the data to the email template
    public $room_code;
    public $price;
    public $email;
    public $name;
    public $number;
    public $check_in;
    public $check_out;
    public $payment_method;
    public $booking_status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        $room_code,
        $price,
        $email,
        $name,
        $number,
        $check_in,
        $check_out,
        $payment_method,
        $booking_status
    ) {
        $this->room_code = $room_code;
        $this->price = $price;
        $this->email = $email;
        $this->name = $name;
        $this->number = $number;
        $this->check_in = $check_in;
        $this->check_out = $check_out;
        $this->payment_method = $payment_method;
        $this->booking_status = $booking_status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.room_confirmation')
            ->subject('Room Booking Confirmation') // Email subject
            ->with([
                // Pass data to the email template
                'room_code' => $this->room_code,
                'price' => $this->price,
                'email' => $this->email,
                'name' => $this->name,
                'number' => $this->number,
                'check_in' => $this->check_in,
                'check_out' => $this->check_out,
                'payment_method' => $this->payment_method,
                'booking_status' => $this->booking_status,
            ]);
    }
}

