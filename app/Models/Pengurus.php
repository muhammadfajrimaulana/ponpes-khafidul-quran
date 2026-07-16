<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';
    protected $fillable = ['nama', 'email', 'jabatan', 'jenis_kelamin', 'foto', 'alamat', 'visi', 'keahlian', 'pendidikan_terakhir', 'masa_bakti'];
}
