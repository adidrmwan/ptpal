<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CraneGoliath extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'crane_goliath';
    public $timestamps = true;
    protected $fillable = [ 
    	'ket_1', 'ket_2',
    	'ket_3', 'ket_4',
    	'ket_5', 'ket_6',
    	'ket_7', 'ket_8',
    	'ket_9', 'ket_10',
    	'ket_11','ket_12',
    	'ket_13', 'checklist_1',
    	'checklist_2', 'checklist_3',
    	'checklist_4', 'checklist_5',
    	'checklist_6', 'checklist_7',
    	'checklist_8', 'checklist_9',
    	'checklist_10', 'checklist_11',
    	'checklist_12', 'checklist_13'
    ];

    public function inspeksi()
    {
    	return $this->belongsTo('App\Inspeksi', 'foreign_key');
    }
    
}
