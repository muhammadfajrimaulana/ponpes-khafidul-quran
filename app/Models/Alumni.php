<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    protected $fillable = ['nama', 'foto', 'kode_santri', 'nama_wali', 'kontak_wali', 'angkatan', 'alamat', 'pekerjaan', 'kampus', 'tahun_lulus'];
}
