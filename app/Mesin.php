<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    protected $primaryKey = 'kode_mesin';
    protected $table = 'mesin';
    public $timestamps = false;
    protected $fillable = [
    	'nama_mesin', 
    	'bengkel'
    ];

}
