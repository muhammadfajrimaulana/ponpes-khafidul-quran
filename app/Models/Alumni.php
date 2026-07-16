<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    /** @use HasFactory<\Database\Factories\PengurusFactory> */
    use HasFactory;
    protected $table = 'alumnis';
    protected $fillable = ['nama', 'foto', 'kode_santri', 'nama_wali', 'kontak_wali', 'angkatan', 'alamat', 'pekerjaan', 'kampus', 'tahun_lulus'];
}
