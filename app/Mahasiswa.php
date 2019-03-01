<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nik', 'nama', 'address1', 'address2', 'address3'];
    protected $dates = ['created_at', 'updated_at'];
}
