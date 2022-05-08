<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_eventtype', 'event_id', 'event_type_id');
    }
}
