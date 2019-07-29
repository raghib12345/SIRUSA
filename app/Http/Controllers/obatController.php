<?php

namespace App\Http\Controllers;

use App\Model\obat;
use App\Model\pengobatan;
use App\Model\periksa;
use Illuminate\Http\Request;
use DB;

class obatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = obat::all();
        return view('obat.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        obat::create([
            'nama_obat'=>$request->namaobat,
            'jenis_obat'=>$request->jenisobat,
            'harga_beli'=>$request->hargabeli,
            'harga_jual'=>$request->hargajual,
            'stok'=>$request->stok
        ]);

        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $idperiksa = $request->idperiksa;
        $data = periksa::findOrFail($id);
        $detail = pengobatan::where('periksa_id',$idperiksa)->get();
        $obat = obat::all();
        return view('obat.show',compact('data','obat','detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
