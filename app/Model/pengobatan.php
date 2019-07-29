<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pengobatan extends Model
{
    protected $guarded = ['id'];
    public $table = 'pengobatan';

    public function periksa()
    {
    	return $this->belongsTo('App\Model\periksa','periksa_id');
    }

    public function pasien()
    {
    	return $this->belongsTo('App\Model\pasien','pasien_id');
    }

    public function obat()
    {
    	return $this->belongsTo('App\Model\obat','obat_id');
    }
}
