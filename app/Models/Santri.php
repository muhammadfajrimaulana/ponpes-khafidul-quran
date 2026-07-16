<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santris';
    protected $fillable = ['nama', 'foto', 'nama_wali', 'kontak_wali', 'kode_santri', 'angkatan', 'alamat', 'status'];
}
