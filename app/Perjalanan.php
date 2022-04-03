<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = [
        'id',
        'user_id',
        'nama_perjalanan',
        'tanggal',
        'jam',
        'lokasi',    
        'suhu_tubuh'
    ];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kota()
    {
        return $this->belongsTo('App\Kota');
    }
}
