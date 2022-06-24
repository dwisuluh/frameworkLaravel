@extends('layouts.app')
@section('content')
    <h4>Tambah Masiswa Baru</h4>
    <form action="{{ route('mahasiswa.store') }}" method="post">
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
            <label for="nim" class="control-label">Nomor Mahasiswa</label> <input type="text" class="form-control"
                name="nim" placeholder="nomor mahasiswa">
        </div>
        <div class="form-group">
            <label for="nama" class="control-label">Nama</label> <input type="text" class="form-control"
                name="nama" placeholder="nama">
        </div>
        <div class="form-group">
            <label for="alamat" class="control-label">Alamat</label> <input type="text" class="form-control"
                name="alamat" placeholder="alamat">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label> <input type="date"
                class="form-control" name="tanggal_lahir" placeholder="tanggal lahir">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin :</label>
            <input type="radio" name="jenis_kelamin" value="L"> Laki-laki <input type="radio" name="jenis_kelamin"
                value="P"> Perempuan
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select class="form-control" name="agama">
                <option value="">--pilihan--</option>
                <option value="1">Islam</option>
                <option value="2">Protestan</option>
                <option value="3">Katholik</option>
                <option value="4">Hindu</option>
                <option value="5">Buda</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jurusan_id">Jurusan</label>
            <select class="form-control" name="jurusan_id">
                <option value="">--pilihan--</option>
                @foreach ($jur as $j)
                    <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button> <a href="{{ route('mahasiswa.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
