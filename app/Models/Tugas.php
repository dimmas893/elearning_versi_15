<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $fillable = [
        'jadwal_id',
        'judul',
        'type',
        'file_or_link',
        'description',
        'pengumpulan',
        'tanggal',
        'pertemuan',
        'semester'
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
