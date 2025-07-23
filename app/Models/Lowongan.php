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

     public function getStatusLowonganAttribute()
    {
        if (!$this->status) {
            return 'Tidak Aktif';
        }

        if ($this->tanggal_berakhir && now()->gt($this->tanggal_berakhir)) {
            return 'Tidak Aktif';
        }

        return 'Aktif';
    }

    public function scopeAktif($query)
    {
        return $query->where('status', true)
            ->where(function ($q) {
                $q->whereNull('tanggal_berakhir')->orWhere('tanggal_berakhir', '>=', now());
            });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }

}
