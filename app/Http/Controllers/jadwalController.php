<?php

namespace App\Http\Controllers;

use App\Model\jadwal;
use App\Model\poli;
use App\Model\dokter;
use Illuminate\Http\Request;
use DB;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jadwal::all();
        return view('jadwal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = jadwal::all();
        $poli = poli::all();
        $dokter = dokter::all();
        return view('jadwal.create',compact('data','poli','dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        jadwal::create([
            'poli_id'=>$request->poli,
            'dokter_id'=>$request->dokter,
            'hari_buka'=>$request->hari,
            'jam_buka'=>$request->jam_buka,
            'jam_tutup'=>$request->jam_tutup
        ]);

        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = jadwal::where('id',$id)->first();
        $poli = poli::all();
        $dokter = dokter::all();
        return view('jadwal.edit',compact('jadwal','poli','dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        jadwal::where('id',$id)->update([
            'poli_id'=>$request->poli,
            'dokter_id'=>$request->dokter,
            'hari_buka'=>$request->hari,
            'jam_buka'=>$request->jam_buka,
            'jam_tutup'=>$request->jam_tutup
        ]);

        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::where('id',$id)->delete();

        return redirect()->route('jadwal.index');

    }
}
