<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $guarded = ['id'];
    public $table = 'dokter';

    public function poli()
    {
    	return $this->belongsTo('App\Model\poli');
    }
}
