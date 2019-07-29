<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class periksa extends Model
{
    protected $guarded = ['id'];
    public $table = 'periksa';

    
    public $timestamps = false;
	public function dokter(){
		return $this->belongsTo('App\Model\dokter');
	}

	public function pasien(){
		return $this->belongsTo('App\Model\pasien');
	}

	public function pengobatan()
	{
		return $this->belongsTo('App\Model\pengobatan','periksa_id');
	}

}
