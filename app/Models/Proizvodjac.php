<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motor;

class Proizvodjac extends Model
{
    use HasFactory;

    protected $fillable = [
        'kompanija',
        'godinaOsnivanja',
        'website',
    ];

    public function motori()
    {
        return $this->hasMany(Motor::class);
    }
}
