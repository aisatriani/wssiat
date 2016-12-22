<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'kodejur';
    protected $fillable = [
        'kodefak',
        'kodejur',
        'jurusan',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class,'kodefak');
    }
}
