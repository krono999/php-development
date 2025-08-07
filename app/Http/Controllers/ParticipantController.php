<?php

namespace App\Http\Controllers;

use App\Events\ParticipantRegistered;
use App\Http\Requests\ParticipantRequest;
use App\Models\Participant;
use Illuminate\Support\Facades\Cache;

class ParticipantController extends Controller
{
    // Registro
    public function store(ParticipantRequest $request)
    {
        $participant = Participant::create($request->validated());

        event(new ParticipantRegistered($participant));

        return response()->json($participant, 201);
    }

    // Consulta con cache Redis
    public function show($id)
    {
        $cacheKey = "participant_{$id}";

        $participant = Cache::remember($cacheKey, 60*60, function () use ($id) {
            return Participant::findOrFail($id);
        });

        return response()->json($participant);
    }
}
