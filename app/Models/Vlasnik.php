<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motor;

class Vlasnik extends Model
{
    use HasFactory;

    public function motori()
    {
        return $this->hasMany(Motor::class);
    }
}
