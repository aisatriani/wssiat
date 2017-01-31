<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontrakKrs extends Model
{
    protected $table = 'kontrak_krs';
    protected $fillable = [
        'nim',
        'kodemakul',
        'namamakul',
        'pa',
        'setujui',
        'tahun',
        'semester'
    ];
}
