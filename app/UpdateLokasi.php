<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpdateLokasi extends Model
{
    protected $table = 'update_lokasi';
    public $primaryKey = 'nidn';
    protected $fillable = [
        'nidn',
        'latitude',
        'longitude',
        'active',
    ];

}
