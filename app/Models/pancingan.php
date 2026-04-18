<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pancingan extends Model
{
  protected $fillable = [
        'spesies_ikan',
        'berat_kg',
        'lokasi_mancing',
        'umpan',
    ];
}
