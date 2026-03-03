<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'thumbnail',
        'name',
        'description',
        'price',
        'date',
        'time',
        'is_active'
    ];

    /**
     * Get all of the eventParticipant for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventParticipant()
    {
        return $this->hasMany(EventParticipant::class);
    }
}
