<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'status_perkawinan',
        'pendidikan_terakhir',
        'pengalaman_kerja',
        'cv',
        'portfolio',
        'is_complete',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

