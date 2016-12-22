<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'kodeprodi';
    protected $fillable = [
        'kodejur',
        'kodeprodi',
        'prodi'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'kodejur');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kodeprodi');
    }
}
