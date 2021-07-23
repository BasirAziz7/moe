<?php

namespace App\Http\Controllers;

use App\Models\Keputusan;
use Illuminate\Http\Request;

class KeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keputusans = Keputusan::all();
        return view('keputusan.index',[
            'keputusans'=> $keputusans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keputusan.create');
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
           
            
            'tahuntingkatan_id'=> 'required',
            'jenis_pentaksiran'=> 'required', 
            'subjek'=>'required',
            'gred'=>'required',

        ]);
        echo $request;
        $keputusan = new Keputusan;
       
        $keputusan ->tahuntingkatan_id= $request->tahuntingkatan_id;
        $keputusan ->jenis_pentaksiran= $request->jenis_pentaksiran;
        $keputusan ->subjek= $request->subjek;
        $keputusan ->gred= $request->gred;
        $keputusan->save(); 
        return redirect('/keputusans');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keputusan  $keputusan
     * @return \Illuminate\Http\Response
     */
    public function show(Keputusan $keputusan)
    {
        return view('keputusan.show', [
            'keputusan'=> $keputusan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keputusan  $keputusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keputusan $keputusan)
    {
        return view('keputusan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keputusan  $keputusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keputusan $keputusan)
    {
        
        $keputusan ->tahuntingkatan_id= $request->tahuntingkatan_id;
        $keputusan ->jenis_pentaksiran= $request->jenis_pentaksiran;
        $keputusan ->subjek= $request->subjek;
        $keputusan ->gred= $request->gred;
        $keputusan->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keputusan  $keputusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keputusan $keputusan)
    {
        //
    }
}
