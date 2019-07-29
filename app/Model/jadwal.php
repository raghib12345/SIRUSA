<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $guarded = ['id'];
    public $table = 'jadwal';

    public $timestamps = false;

    public function poli()
    {
    	return $this->belongsTo('App\Model\poli');
    }
    public function dokter()
    {
    	return $this->belongsTo('App\Model\dokter');
    }
}
