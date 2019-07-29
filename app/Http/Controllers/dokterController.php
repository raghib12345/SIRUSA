<?php

namespace App\Http\Controllers;

use App\Model\poli;
use App\Model\dokter;
use Illuminate\Http\Request;
use DB;

class dokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dokter::all();
        return view('dokter.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = poli::all();
        return view('dokter.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dokter::create([
            'nidn' => $request->nidn,
            'nama_dokter' => $request->dokter,
            'alamat_dokter' => $request->alamat,
            'no_hpdokter' => $request->no_hp,
            'poli_id' => $request->jenispoli
        ]);

        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = TbBlog::find($id);
        return view('site.show',compact('blog'))->renderSections()['content'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = dokter::where('id',$id)->first();
        $data = poli::all();
        return view('dokter.edit',compact('dokter','data'));
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
        dokter::where('id',$id)->update([
            'nidn' => $request->nidn,
            'nama_dokter' => $request->dokter,
            'alamat_dokter' => $request->alamat,
            'no_hpdokter' => $request->no_hp,
            'poli_id' => $request->jenispoli
            ]
        );

        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dokter::where('id',$id)->delete();
        return redirect()->route('dokter.index');
    }
}
