<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    protected $primaryKey = 'kodefak';
    protected $fillable = [
        'kodefak',
        'fakultas',
    ];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class,'kodejur');
    }
}
