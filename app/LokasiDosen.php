<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LokasiDosen extends Model
{
    protected $table = 'lokasi_dosen';
    protected $fillable = [
        'nidn',
        'kabkot',
        'latitude',
        'longitude'
    ];

    protected $primaryKey = 'nidn';
}
