<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jadwal;
use App\model\poli;
use App\Model\dokter;
use App\Model\pasien;
use App\Model\periksa;
class apiController extends Controller
{
    public function getJadwal()
    {
    	$data = jadwal::with('poli','dokter')->get();
    	return $data;
    }

    public function postPasien(Request $request)
    {
    	$save = pasien::create($request->all());
    	if ($save) {
    		$res = array(
    			'status' => true,
    			'message' => 'data pasien berhasil disimpan' 
    		);
    	}else {
    		$res = array(
    			'status' => false,
    			'message' => 'data pasien gagal disimpan' 
    		);
    	}
    	return response()->json($res);
    }

    public function postDaftar(Request $request)
    {
        $save = periksa::create($request->all());
        if ($save) {
            $res = array(
                'status' => true,
                'message' => 'data pasien berhasil disimpan' 
            );
        }else {
            $res = array(
                'status' => false,
                'message' => 'data pasien gagal disimpan' 
            );
        }
        return response()->json($res);
    }
}
