<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    //protected $fillable = ['kode_mk','mata_kuliah','jumlah_sks'];  //mass assignment

    protected $guarded = [];
}
