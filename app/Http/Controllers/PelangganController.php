<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view('menu.Pelanggan', compact('data'));
    }

    public function iPelanggan(){
        return view('menu.input.iPelanggan');
    }

     public function instPelanggan(Request $request){
        Pelanggan::create($request->all());
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPelanggan($id){
        $data = Pelanggan::find($id);
        return view('menu.edit.ePelanggan', compact('data'));
    }

    public function updatePelanggan(Request $request, $id ){
        $data = Pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPelanggan($id){
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Dihapus');
    }
}
