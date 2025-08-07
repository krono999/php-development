<?php

namespace App\Listeners;

use App\Events\ParticipantRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeEmail implements ShouldQueue
{
    public function handle(ParticipantRegistered $event)
    {
        //lo ideal seria Simular envío de mail (ejemplo log)
        \Log::info('Envío de correo de bienvenida a: '.$event->participant->email);
    }
}
