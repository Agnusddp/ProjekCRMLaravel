<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('menu.Pegawai', compact('data'));
    }

    public function iPegawai(){
        return view('menu.input.iPegawai');
    }

     public function instPegawai(Request $request){
        Pegawai::create($request->all());
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPegawai($id){
        $data = Pegawai::find($id);
        return view('menu.edit.ePegawai', compact('data'));
    }

    public function updatePegawai(Request $request, $id ){
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPegawai($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('Pegawai')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportPegawai(){
        $data = Pegawai::all();
        $pdf = PDF::loadView('menu.pdf.export-pegawai', compact('data'));
        return $pdf->download('LaporanDataPegawai.pdf');
    }
}
