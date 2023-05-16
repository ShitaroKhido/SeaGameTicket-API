<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Playgrounds extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function stadium(): HasOne
    {
        return $this->hasOne(Stadiums::class);
    }
}
