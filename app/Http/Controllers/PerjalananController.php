<?php

namespace App\Http\Controllers;

use DB;
use App\Perjalanan;
use App\Kota;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Perjalanan::where('user_id', Auth::user()->id)->paginate(8);
        return view('perjalanan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::orderBy('nama_kota','asc')->get();
        // dd($kota);

        if (empty(Auth::user()->no_telp)) {
            return redirect('/profil');
        }
        return view('perjalanan.create', compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = [
            'user_id'=>Auth::user()->id,
            'nama_perjalanan'=>$request->nama_perjalanan,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            // 'kota_id'=>$request->kota_id,
            'suhu_tubuh'=>$request->suhu_tubuh,
            
        ];
        Perjalanan::create($value);
        return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data = Perjalanan::destroy($id);
        return redirect('/perjalanan')->with('success', 'Task Created Successfully!');
    }
}
