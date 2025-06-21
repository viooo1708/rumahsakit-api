<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{

    protected $table = 'rumah_sakits';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'tipe', 'latitude', 'longitude'
    ];
}

