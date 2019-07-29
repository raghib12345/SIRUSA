<?php

namespace App\Http\Controllers;

use App\Model\pasien;
use App\Model\rekammedis;
use App\Model\periksa;
use Illuminate\Http\Request;
use DB;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pasien::all();
        return view('pasien.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pasien::create([
            'no_pasien'=>$request->nopasien,
            'nama_pasien'=>$request->namapasien,
            'tgl_lahir'=>$request->tgllahir,
            'alamat_pasien'=>$request->alamat,
            'no_hppasien'=>$request->nohp
        ]);

        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $idpasien = $request->idpasien;
        $data = pasien::findOrFail($idpasien);
        $tgl = date("Y m d");
        $idperiksa = periksa::where('id',$id)->get();
        return view('pasien.show',compact('data','tgl','idperiksa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pasien::where('id',$id)->first();
        return view('pasien.edit',compact('data'));
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
        pasien::where('id',$id)->update([
            'no_pasien'=>$request->nopasien,
            'nama_pasien'=>$request->namapasien,
            'tgl_lahir'=>$request->tgllahir,
            'usia'=>$request->usia,
            'alamat_pasien'=>$request->alamatpasien,
            'no_hppasien'=>$request->nohp
        ]);

        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pasien::where('id',$id)->delete();
        return redirect()->route('pasien.index');
    }
}
