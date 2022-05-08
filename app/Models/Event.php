<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function eventType(): BelongsToMany
    {
        return $this->belongsToMany(EventType::class, 'event_eventtype', 'event_id', 'event_type_id');
    }

    public function guests(): BelongsToMany
    {
        return $this->belongsToMany(Guest::class, 'event_guests', 'event_id', 'guest_id');
    }
}
