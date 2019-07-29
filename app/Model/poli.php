<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    protected $guarded = ['id'];
    public $table = 'poli';

    public function dokter()
    {
    	return $this->hasMany('App\Model\dokter');
    }

}
