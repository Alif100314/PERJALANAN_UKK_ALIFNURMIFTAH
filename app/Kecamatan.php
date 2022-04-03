<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatans';
    protected $fillable = [
        'nama_kecamatan'
    ];
    protected $primaryKey = 'id';

}
