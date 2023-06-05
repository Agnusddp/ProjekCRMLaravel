<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('menu.Barang', compact('data'));
    }

    public function iBarang(){
        return view('menu.input.iBarang');
    }

     public function instBarang(Request $request){
        Barang::create($request->all());
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editBarang($id){
        $data = Barang::find($id);
        return view('menu.edit.eBarang', compact('data'));
    }

    public function updateBarang(Request $request, $id ){
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delBarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Dihapus');
    }
}
