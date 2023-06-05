<?php

namespace App\Http\Controllers;

use App\Models\Poinp;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PoinpController extends Controller
{
    public function index()
    {
        $data = Poinp::all();
        return view('menu.Poinp', compact('data'));
    }

    public function iPoinp(){
        $pelanggan = Pelanggan::all();
        return view('menu.input.iPoinp', compact('pelanggan'));
    }

     public function instPoinp(Request $request){
        Poinp::create($request->all());
        return redirect()->route('Poinp')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPoinp($id){
        $data = Poinp::find($id);
        $pelanggan = Pelanggan::all();
        return view('menu.edit.ePoinp', compact('data','pelanggan'));
    }

    public function updatePoinp(Request $request, $id ){
        $data = Poinp::find($id);
        $data->update($request->all());
        return redirect()->route('Poinp')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPoinp($id){
        $data = Poinp::find($id);
        $data->delete();
        return redirect()->route('Poinp')->with('Success', 'Data Berhasil Dihapus');
    }
}
