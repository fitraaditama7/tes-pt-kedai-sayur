<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = Mahasiswa::latest()->get();   
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create() {
        $data = DB::table('mahasiswa')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
        $customid = '';
        foreach($data->all() as $datas) {
            $customid = $datas->id + 1;
        }
        
        $kode_length = strlen($customid);
        if($kode_length == 1) 
            $no = '0000000';
        else if($kode_length == 2) 
            $no = '000000';
        else if($kode_length == 3) 
            $no = '00000';
        else if($kode_length == 4) 
            $no = '0000';
        else if($kode_length == 5) 
            $no = '000';
        else if($kode_length == 6) 
            $no = '00';
        else if($kode_length == 7) 
            $no = '0';
        else 
            $no = '';
        
        $hasil = $no.''.$customid;    

        return view('mahasiswa.create', compact('hasil'));
    }

    public function show(Mahasiswa $mahasiswa) {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function store(Request $request) {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required'
        ]);
        Mahasiswa::create($request->all());
        
        return redirect()->route('mahasiswa.index')
                        ->with('success', 'Data Mahasiswa telah ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa) {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa) {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
        ]);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
                        ->with('success', 'Data Mahasiswa Berhasil diupdate'); 
    }

    public function destroy(Mahasiswa $mahasiswa) {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                        ->with('success', 'Data Mahasiswa Berhasil dihapus');
    }

}
