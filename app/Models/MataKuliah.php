<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';

    //protected $fillable = ['kode_mk','mata_kuliah','jumlah_sks'];  //mass assignment

    protected $guarded = [];
}
