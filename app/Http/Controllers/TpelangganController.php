<?php

namespace App\Http\Controllers;

use App\Models\Tpelanggan;
use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class TpelangganController extends Controller
{
    public function index()
    {
        $data = Tpelanggan::all();
        return view('menu.Tpelanggan', compact('data'));
    }

    public function iTpelanggan(){
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        $pegawai = Pegawai::all();
        return view('menu.input.iTpelanggan', compact('pelanggan', 'barang', 'pegawai'));
    }

     public function instTpelanggan(Request $request){
        Tpelanggan::create($request->all());
        return redirect()->route('Tpelanggan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTpelanggan($id){
        $data = Tpelanggan::find($id);
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        $pegawai = Pegawai::all();
        return view('menu.edit.eTpelanggan', compact('data','pelanggan', 'barang', 'pegawai'));
    }

    public function updateTpelanggan(Request $request, $id ){
        $data = Tpelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('Tpelanggan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTpelanggan($id){
        $data = Tpelanggan::find($id);
        $data->delete();
        return redirect()->route('Tpelanggan')->with('Success', 'Data Berhasil Dihapus');
    }
}
