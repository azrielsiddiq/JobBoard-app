<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'lokasi',
        'tipe',
        'gaji',
        'level',
        'kualifikasi',
        'tanggung_jawab',
        'status',
        'tanggal_diposting',
        'tanggal_berakhir',
        'user_id',
    ];

    protected $casts = [
        'tanggal_diposting' => 'date',
        'tanggal_berakhir' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }

}
