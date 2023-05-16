<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedules extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function events(): HasOne
    {
        return $this->hasOne(Events::class);
    }
}
