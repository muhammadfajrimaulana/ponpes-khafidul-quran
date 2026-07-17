<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    /** @use HasFactory<\Database\Factories\PengurusFactory> */
    use HasFactory;
    protected $table = 'pengurus';
    protected $fillable = ['nama', 'foto', 'email', 'no_hp', 'jabatan', 'jenis_kelamin', 'visi', 'keahlian', 'pendidikan_terakhir', 'masa_bakti', 'alamat', 'created_at', 'updated_at'];
}
