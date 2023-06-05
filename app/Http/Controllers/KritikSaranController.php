<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function index()
    {
        $data = KritikSaran::all();
        return view('menu.KritikSaran', compact('data'));
    }

    public function iKritikSaran(){
        $pengguna = Pengguna::all();
        return view('menu.input.iKritikSaran', compact('pengguna'));
    }

     public function instKritikSaran(Request $request){
        KritikSaran::create($request->all());
        return redirect()->route('KritikSaran')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editKritikSaran($id){
        $data = KritikSaran::find($id);
        $pengguna = Pengguna::all();
        return view('menu.edit.eKritikSaran', compact('data', 'pengguna'));
    }

    public function updateKritikSaran(Request $request, $id ){
        $data = KritikSaran::find($id);
        $data->update($request->all());
        return redirect()->route('KritikSaran')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delKritikSaran($id){
        $data = KritikSaran::find($id);
        $data->delete();
        return redirect()->route('KritikSaran')->with('Success', 'Data Berhasil Dihapus');
    }
}
