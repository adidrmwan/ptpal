<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'maintenance';
    public $timestamps = true;
    protected $fillable = [
    	'id_user', 
        'problem_kat_A_1',
    	'problem_kat_A_2', 
        'problem_kat_A_3',
    	'problem_kat_B_1', 
        'problem_kat_B_2',
        'problem_kat_B_3',
        'tgl_mulai',
        'tgl_selesai',
        'laporan_pelaksanaan',
        'ket_material',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
