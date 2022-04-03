<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kotas';
    protected $fillable = [
        'nama_kota'
    ];
    protected $primaryKey = 'id';

    public function perjalanan()
    {
        return $this->hasMany('App\Perjalanan');
    }

} 
