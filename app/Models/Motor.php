<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proizvodjac;
use App\Models\Vlasnik;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'godinaProizvodnje',
        'cena',
        'proizvodjac_id',
        'vlasnik_id'
    ];

    public function proizvodjac()
    {
        return $this->belongsTo(Proizvodjac::class);
    }

    public function vlasnik()
    {
        return $this->belongsTo(Vlasnik::class);
    }
}
