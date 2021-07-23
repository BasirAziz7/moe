<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SudahTambah;
use App\Models\TahunTingkatan;
use Illuminate\Http\Request;

class TahunTingkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahuntingkatans = TahunTingkatan::all();

        $lelaki=10;
        $perempuan=22;
        
        return view('tahuntingkatan.index',[
            'tahuntingkatans'=> $tahuntingkatans,
            'lelaki'=>$lelaki,
            'perempuan'=>$perempuan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahuntingkatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           
            'id'  => 'required',
            'umur'=> 'required',
            'negeri'=> 'required', 
            'peringkat'=> 'required',
            'jantina'=>'required',
            'nama_sekolah'=> 'required',
        ]);
 
        $tahuntingkatan = new TahunTingkatan;
        $tahuntingkatan ->id= $request->id;
        $tahuntingkatan ->umur= $request->umur;
        $tahuntingkatan ->negeri= $request->negeri;
        $tahuntingkatan ->jantina= $request->jantina;
        $tahuntingkatan ->peringkat= $request->peringkat;
        $tahuntingkatan ->nama_sekolah= $request->nama_sekolah;
        
       
        
        $tahuntingkatan->save(); 
        return redirect('/tahuntingkatans');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahunTingkatan  $tahunTingkatan
     * @return \Illuminate\Http\Response
     */
    public function show(TahunTingkatan $tahunTingkatan)
    {    
        return view('tahuntingkatan.show', [
            'tahuntingkatan'=>$tahuntingkatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunTingkatan  $tahunTingkatan
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunTingkatan $tahunTingkatan)
    {
        return view('tahuntingkatan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahunTingkatan  $tahunTingkatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunTingkatan $tahunTingkatan)
    {
        $tahuntingkatan ->id= $request->id;
        $tahuntingkatan ->umur= $request->umur;
        $tahuntingkatan ->negeri= $request->negeri;
        $tahuntingkatan ->jantina= $request->jantina;
        $tahuntingkatan ->peringkat= $request->peringkat;
        $tahuntingkatan ->nama_sekolah= $request->nama_sekolah;
        $tahuntingkatan->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahunTingkatan  $tahunTingkatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunTingkatan $tahunTingkatan)
    {
        //
    }


    
}
