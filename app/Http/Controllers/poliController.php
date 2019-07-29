<?php

namespace App\Http\Controllers;

use App\Model\poli;
use Illuminate\Http\Request;
use DB;

class poliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = poli::all();
        return view('poli.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        poli::create([       
            'no_poli' => $request->idpoli,       
            'jenis_poli' => $request->poli,      
        ]);
        return redirect()->route('poli.index');
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
        $poli = poli::where('id',$id)->first();
        return view('poli.edit',compact('poli'));
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
        poli::where('id',$id)->update([
            'no_poli'=>$request->idpoli,
            'jenis_poli'=>$request->poli
            ]
        );

        return redirect()->route('poli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        poli::where('id',$id)->delete();
        return redirect()->route('poli.index');
    }
}
