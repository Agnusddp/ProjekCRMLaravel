<?php

namespace App\Http\Controllers;

use App\Models\Tkonsumen;
use App\Models\Konsumen;
use App\Models\Barang;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class TkonsumenController extends Controller
{
    public function index()
    {
        $data = Tkonsumen::all();
        return view('menu.Tkonsumen', compact('data'));
    }

    public function iTkonsumen(){
        $konsumen = Konsumen::all();
        $barang = Barang::all();
        $pegawai = Pegawai::all();
        return view('menu.input.iTkonsumen', compact('konsumen', 'barang', 'pegawai'));
    }

     public function instTkonsumen(Request $request){
        Tkonsumen::create($request->all());
        return redirect()->route('Tkonsumen')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTkonsumen($id){
        $data = Tkonsumen::find($id);
        $konsumen = Konsumen::all();
        $barang = Barang::all();
        $pegawai = Pegawai::all();
        return view('menu.edit.eTkonsumen', compact('data','konsumen', 'barang', 'pegawai'));
    }

    public function updateTkonsumen(Request $request, $id ){
        $data = Tkonsumen::find($id);
        $data->update($request->all());
        return redirect()->route('Tkonsumen')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTkonsumen($id){
        $data = Tkonsumen::find($id);
        $data->delete();
        return redirect()->route('Tkonsumen')->with('Success', 'Data Berhasil Dihapus');
    }
}
