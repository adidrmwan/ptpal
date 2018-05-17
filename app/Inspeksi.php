<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspeksi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'inspeksi';
    public $timestamps = true;
    protected $fillable = [
    	'tipe_crane', 
        'nama_mesin',
    	'bengkel', 
        'shift_hour',
    	'tgl_inspeksi', 
        'catatan'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }  

    public function craneGoliath()
    {
        return $this->hasMany('App\CraneGoliath', 'foreign_key');
    }

    public function cranePH()
    {
        return $this->hasMany('App\CranePH', 'foreign_key');
    }  

    public function craneLLC()
    {
        return $this->hasMany('App\CraneLLC', 'foreign_key');
    }  

    public function craneOverhead()
    {
        return $this->hasMany('App\CraneOverhead', 'foreign_key');
    }  
}
