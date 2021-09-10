<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mataKuliah = MataKuliah::get();
        return view('matakuliah.index', compact('mataKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    private function validationForm(Request $request)
    {
        $this->validate($request,[
            'kode' => 'required|size:3',
            'nama' => 'required|min:3|max:50',
            'jml_sks' => 'required|numeric'
        ],[
            'kode.required'=>'Kode mata kuliah harus diisi',
            'kode.size'=>'Kode mata kuliah harus 3 karakter',
            'nama.required'=>'Mata kuliah harus diisi',
            'nama.min'=>'nama minimal 3 karakter',
            'nama.max'=>'nama maksimal 50 karakter',
            'jml_sks.required'=>'jumlah sks harus diisi',
            'jml_sks.numeric'=>'jumlah sks harus berupa angka'
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validationForm($request);
        //method store
        // $matakuliah = new MataKuliah;
        // $matakuliah->kode_mk = $request->input('kode');
        // $matakuliah->mata_kuliah = $request->input('nama');
        // $matakuliah->jumlah_sks = $request->jml_sks;
        // $matakuliah->save();

        //method create
        MataKuliah::create([
            'kode_mk'=>$request->input('kode'),
            'mata_kuliah'=>$request->input('nama'),
            'jumlah_sks'=>$request->input('jml_sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('status','Berhasil Ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $matakuliah)
    {
        return view('matakuliah.edit',compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataKuliah $matakuliah)
    {
        //
        // $matakuliah->kode_mk=$request->input('kode');
        // $matakuliah->mata_kuliah=$request->input('nama');
        // $matakuliah->jumlah_sks=$request->input('jml_sks');
        // $matakuliah->save();

        //method update
        $matakuliah->update([
            'kode_mk'=>$request->input('kode'),
            'mata_kuliah'=>$request->input('nama'),
            'jumlah_sks'=>$request->input('jml_sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('status','data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('status','data berhasil dihapus');
    }
}
