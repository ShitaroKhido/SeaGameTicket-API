<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedules extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'sport_id',
        'first_country',
        'second_country',
        'event_id',
        'playground_id',
        'start_time',
        'end_time'
    ];

    public function sport(): HasOne
    {
        return $this->hasOne(Sports::class);
    }

    public function playground(): HasOne
    {
        return $this->hasOne(Playgrounds::class);
    }
}
