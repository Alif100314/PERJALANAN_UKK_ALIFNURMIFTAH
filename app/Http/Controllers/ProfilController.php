<?php

namespace App\Http\Controllers;

use App\User;
use App\Perjalanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PDF;

class ProfilController extends Controller
{
    public function Profil()
    {
        $perjalanan = Perjalanan::where('user_id', Auth::user()->id)->paginate(8);
        $user = User::where('id', Auth::user()->id)->first();
        return view('Auth.profil', compact('user','perjalanan'));
    }
    public function update(Request $request)
    {
    	$this->validate($request, [
    			'password' => 'confirmed'

    	]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->nik = $request->nik;
        $user->alamat = $request->alamat;
    	$user->no_telp = $request->no_telp;
        $user->name = $request->name;
    	$user->email = $request->email;
    	if (!empty($request->password)) {
    		$user->password = Hash::make($request->password);	
    	}
    	$user->update();

		if ($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $user->foto=$request->file('foto')->getClientOriginalName();
            $user->save();
        }
    	return redirect('/profil')->with('succes','Berhasil MengUpdate Data');

    }

    public function index()
    {
        $data = User::all();
        return view('Auth.datauser',compact('data'));
    }

    public function pdf(){
        $user = User::all();
 
    	$pdf = PDF::loadview('Auth.cetakpdf',compact('user'));
    	return $pdf->stream();
    }


}
