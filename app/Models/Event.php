<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date'];

    protected $casts = [
        'date' => 'datetime',
    ];
    public function attendees()
        {
            return $this->hasMany(EventRsvp::class, 'event_id');
        }

}

