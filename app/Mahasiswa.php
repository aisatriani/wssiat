<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'dosen_pa_nidn',
        'dosen_pa_nama',
        'kodeprodi'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'kodeprodi');
    }
}
