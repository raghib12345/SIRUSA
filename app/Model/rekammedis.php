<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class rekammedis extends Model
{
    protected $guarded = ['id'];
    public $table = 'rekammedis';

    

    public function periksa()
    {
    	return $this->belongsTo('App\Model\periksa','periksa_id');
    }
}
