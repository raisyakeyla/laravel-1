<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index ()
    {
       $barang = Barang::all();
       return view('home.barang.index', compact('barang'));
    }

    public function create()
    {
        return view('home.barang.tambah');
    }

    public function store(Request $request){
        Barang::create([
            'gambar'=> $request->gambar,
            'nama_barang'=> $request->nama_barang,
            'id_jenis'=> $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok
        ]);
        return redirect('/barang');
    }

    public function show($id)
    {
       $barang = Barang::find($id);
       return view('home.barang.show', compact('barang'));
    }

    public function update($id, Request $request)
    {
        $barang = Barang::find($id);
        $barang->update([
            'gambar'=> $request->gambar,
            'nama_barang'=> $request->nama_barang,
            'id_jenis'=> $request->id_jenis,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok
        ]);
        return redirect(('barang'));
    }
   
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }

}
