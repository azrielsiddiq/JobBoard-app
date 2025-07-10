<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{

    protected $table = 'lamaran';

    protected $fillable = [
        'user_id',
        'lowongan_id',
        'status',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke lowongan
    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class);
    }
}
