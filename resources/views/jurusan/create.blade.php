@extends('layouts.app')
@section('content')
    <h4>Tambah Jurusan Baru</h4>
    <form action="{{ route('jurusan.store') }}" method="post">
        {{ csrf_field() }}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="nama_jurusan" class="control-label">Nama Jurusan</label> <input type="text" class="form-control"
                name="nama_jurusan" placeholder="Nama Jurusan">
        </div>
        <div class="form-group">
            <label for="jumlah_sks" class="control-label">Jumlah SKS</label> <input type="text" class="form-control"
                name="jumlah_sks" placeholder="Jumlah SKS">
        </div>
        <div class="form-group">
            <label for="jenjagn">Jenjang</label>
            <select class="form-control" name="jenjang">
                <option value="">--pilihan--</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="D3">D3</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button> <a href="{{ route('mahasiswa.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
