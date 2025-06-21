<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{

    protected $table = 'rumah_sakits';
    protected $primaryKey = 'no';
    public $incrementing = true;
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'tipe', 'latitude', 'longitude'
    ];
}

