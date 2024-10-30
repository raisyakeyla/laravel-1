<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index ()
    {
       $jenis = Jenis::all();
       return view('home.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('home.jenis.tambah');
    }

    public function store(Request $request){
        Jenis::create([
            'nama_jenis'=> $request->nama_jenis,
           
        ]);
        return redirect('/jenis');
    }

    public function show($id)
    {
       $jenis = Jenis::find($id);
       return view('home.jenis.show', compact('jenis'));
    }

    public function update($id, Request $request)
    {
        $jenis = Jenis::find($id);
        $jenis->update([
            'nama_jenis'=> $request->nama_jenis,
           
        ]);
        return redirect(('jenis'));
    }
   
    public function destroy($id)
    {
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');
    }

}
