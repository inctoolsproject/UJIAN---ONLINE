<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_soal extends Model
{
    protected $table = "tbl_soal";
    protected $fillable = ['soal', 'a', 'b', 'c', 'd', 'knc_jawaban', 'gambar', 'aktif'];
}
