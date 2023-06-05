<?php

namespace App\Http\Controllers;

use App\Models\Penukaranp;
use Illuminate\Http\Request;

class PenukaranpController extends Controller
{
    public function index()
    {
        $data = Penukaranp::all();
        return view('menu.Penukaranp', compact('data'));
    }

    public function iPenukaranp(){
        return view('menu.input.iPenukaranp');
    }

     public function instPenukaranp(Request $request){
        Penukaranp::create($request->all());
        return redirect()->route('Penukaranp')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPenukaranp($id){
        $data = Penukaranp::find($id);
        return view('menu.edit.ePenukaranp', compact('data'));
    }

    public function updatePenukaranp(Request $request, $id ){
        $data = Penukaranp::find($id);
        $data->update($request->all());
        return redirect()->route('Penukaranp')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPenukaranp($id){
        $data = Penukaranp::find($id);
        $data->delete();
        return redirect()->route('Penukaranp')->with('Success', 'Data Berhasil Dihapus');
    }
}
