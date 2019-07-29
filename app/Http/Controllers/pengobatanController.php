<?php

namespace App\Http\Controllers;

use App\Model\obat;
use App\Model\periksa;
use App\Model\pengobatan;
use Illuminate\Http\Request;

class pengobatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pengobatan::create([
            'periksa_id'=>$request->idperiksa,
            'pasien_id'=>$request->idpasien,
            'obat_id'=>$request->pilihan,
            'jumlah'=>$request->jumlah
        ]);
        return redirect()->route('obat.show',['periksa_id'=>$request->idperiksa,'idperiksa'=>$request->idperiksa]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function destroy(Request $request,$id)
    {
        pengobatan::where('id',$id)->delete();
        return redirect()->route('obat.show',['periksa_id'=>$request->idperiksa,'idperiksa'=>$request->idperiksa]);
    }
}
