<?php

namespace App\Mail;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CarActivated extends Mailable
{
    use Queueable, SerializesModels;
    public Car $car;

    /**
     * Create a new message instance.
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function build(): static
    {
        return $this->subject('Disponibilité Voiture')
            ->view('mail.car_activated');
    }
}
