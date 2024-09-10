<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $fillable = ['nama_sekolah', 'jurusan', 'tahun_lulus'];


}
