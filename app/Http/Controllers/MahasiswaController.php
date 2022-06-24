<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jur = Jurusan::all();
        return view('mahasiswa.create', compact('jur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jurusan_id' => 'required',
            'jenis_kelamin' => 'required',

        ]);
        $mhs = new Mahasiswa;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->tgl_lahir = $request->tanggal_lahir;
        $mhs->agama = $request->agama;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->jurusan_id = $request->jurusan_id;
        $mhs->save();

        return redirect()->route('mahasiswa.index')->with(
            'message',
            'Mahasiswa baru berhasil ditambahkan!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        $jur = Jurusan::all();
        return view('mahasiswa.edit', compact('mhs', 'jur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jurusan_id' => 'required',
            'jenis_kelamin' => 'required',

        ]);
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->tgl_lahir = $request->tanggal_lahir;
        $mhs->agama = $request->agama;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->jurusan_id = $request->jurusan_id;
        $mhs->save();

        return redirect()->route('mahasiswa.index')->with(
            'message',
            'Mahasiswa baru berhasil ditambahkan!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index')->with('message','Mahasiswa berhasil dihapus');
    }
}
