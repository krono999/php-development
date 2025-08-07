<?php

namespace App\Listeners;

use App\Events\ParticipantRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class UpdateRegistrationStats implements ShouldQueue
{
    public function handle(ParticipantRegistered $event)
    {
        Cache::increment('registrations_count');
    }
}
