<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santris';
    protected $fillable = ['nama_santri', 'foto', 'nama_wali', 'kontak_wali', 'jenis_kelamin', 'nisn', 'kelas', 'angkatan', 'alamat', 'status'];

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'santri_id', 'id');
    }
    protected static function booted()
    {
        static::updated(function ($santri) {
            if ($santri->status === 'alumni') {
                \App\Models\Alumni::firstOrCreate(
                    ['santri_id' => $santri->id]
                );
            }
        });
    }
}
