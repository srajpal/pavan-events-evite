<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guest extends Model
{
    use HasFactory;

    protected $guarded = [];

    const EVENT_NOT_SEEN = 0;
    const EVENT_NOT_ANSWERED = 1;
    const EVENT_ATTENDING = 2;
    const EVENT_NOT_ATTENDING = 3;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_guests', 'event_id', 'guest_id');
    }
}
