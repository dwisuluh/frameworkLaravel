@extends('layouts.app')
@section('content')
<h4>Mengubah Masiswa Baru</h4>
<form action="{{ route('mahasiswa.update', $mhs->nim) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
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
            name="nim" value="{{ $mhs->nim }}">
    </div>
    <div class="form-group">
        <label for="nama" class="control-label">Nama</label> <input type="text" class="form-control"
            name="nama" value="{{ $mhs->nama }}">
    </div>
    <div class="form-group">
        <label for="alamat" class="control-label">Alamat</label> <input type="text" class="form-control"
            name="alamat" value="{{ $mhs->alamat }}">
    </div>
    <div class="form-group">
        <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label> <input type="date"
            class="form-control" name="tanggal_lahir" value="{{ $mhs->tgl_lahir }}">
    </div>
    <div class="form-group">
        <label for="jenis_kelamin" class="control-label">Jenis Kelamin :</label> <input type="radio"
            name="jenis_kelamin" value="L" {{ $mhs->jenis_kelamin == 'L' ? 'checked' : '' }}> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="P" {{ $mhs->jenis_kelamin == 'P' ? 'checked' : '' }}> Perempuan<br>
    </div>
    <div class="form-group">
        <label for="agama">Agama</label>
        <select class="form-control" name="agama">
            <option value="">--pilihan--</option>
            <option value="1" {{ $mhs->agama == 1 ? 'selected' : '' }}>Islam</option>
            <option value="2" {{ $mhs->agama == 2 ? 'selected' : '' }}>Protestan</option>
            <option value="3" {{ $mhs->agama == 3 ? 'selected' : '' }}>Katholik</option>
            <option value="4" {{ $mhs->agama == 4 ? 'selected' : '' }}>Hindhu</option>
            <option value="5" {{ $mhs->agama == 5 ? 'selected' : '' }}>Budha</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jurusan_id">Jurusan</label>
        <select class="form-control" name="jurusan_id">
            <option value="">--pilihan--</option>
            @foreach ($jur as $j)
                <option disable="true" value="{{ $j->id }}"
                    {{ $j->id == $mhs->jurusan_id ? 'selected' : '' }}>{{ $j->nama_jurusan }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button> <a href="{{ route('mahasiswa.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
