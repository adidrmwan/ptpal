<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspeksi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'inspeksi';
    public $timestamps = true;
    protected $fillable = [
    	'id_user', 
    	'ket_1', 'ket_2',
    	'ket_3', 'ket_4',
    	'ket_5', 'ket_6',
    	'ket_7', 'ket_8',
    	'ket_9', 'ket_10',
    	'ket_11','ket_12',
    	'ket_13', 'ket_14', 
    	'ket_15', 'ket_16', 'checklist_1',
    	'checklist_2', 'checklist_3',
    	'checklist_4', 'checklist_5',
    	'checklist_6', 'checklist_7',
    	'checklist_8', 'checklist_9',
    	'checklist_10', 'checklist_11',
    	'checklist_12', 'checklist_13', 
    	'checklist_14', 'checklist_15', 'checklist_16',
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
