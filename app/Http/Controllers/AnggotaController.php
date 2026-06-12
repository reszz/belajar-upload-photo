<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index(){
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }
    public function create(){
        return view('anggota.create');
    }
    public function store(Request $request){
        $pathFoto = null;
        if($request->hasFile('foto_profil')){
            $pathFoto = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'foto_profil' => $pathFoto,
        ]);
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }
}
