<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $guarded = ['id'];
    public $table = 'pasien';

    public function rekam(){
    	return $this->hasMany('App\Model\rekammedis');
    }

    public function periksa(){
    	return $this->belongsTo('App\Model\periksa','periksa_id');
    }

}
