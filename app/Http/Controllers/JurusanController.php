<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'nama_jurusan' => 'required',
            'jumlah_sks' => 'required',
            'jenjang' => 'required',
        ]);

        $jurusan = new Jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->jumlah_sks = $request->jumlah_sks;
        $jurusan->jenjang = $request->jenjang;
        $jurusan->save();

        return redirect()->route('jurusan.index')->with('message','Data Jurusan Berhasil ditambahkan');
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
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit',compact('jurusan'));
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
            'nama_jurusan' => 'required',
            'jumlah_sks' => 'required',
            'jenjang' => 'required',
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->jumlah_sks = $request->jumlah_sks;
        $jurusan->jenjang = $request->jenjang;
        $jurusan->save();

        return redirect()->route('jurusan.index')->with('message','Data Jurusan Berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Jurusan::findOrFail($id)->delete();
        return redirect()->route('jurusan.index')->with('message','Jurusan berhasil dihapus');
    }
}
