<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    /** @use HasFactory<\Database\Factories\PengurusFactory> */
    use HasFactory;
    protected $table = 'santris';
    protected $fillable = ['nama', 'foto', 'nama_wali', 'kontak_wali', 'nisn', 'kelas', 'angkatan', 'alamat', 'status'];
}
