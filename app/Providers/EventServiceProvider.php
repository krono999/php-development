protected $listen = [
    \App\Events\ParticipantRegistered::class => [
        \App\Listeners\SendWelcomeEmail::class,
        \App\Listeners\UpdateRegistrationStats::class,
    ],
];
