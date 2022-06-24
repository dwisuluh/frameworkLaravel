@extends('layouts.app')
@section('content')
<h4>Mengubah Data Jurusan</h4>
<form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
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
        <label for="nama_jurusan" class="control-label">Nama Jurusan</label> <input type="text" class="form-control"
            name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
    </div>
    <div class="form-group">
        <label for="jumlah_sks" class="control-label">Jumlah SKS</label> <input type="text" class="form-control"
            name="jumlah_sks" value="{{ $jurusan->jumlah_sks }}">
    </div>
    <div class="form-group">
        <label for="jenajng">Jenjang</label>
        <select class="form-control" name="jenjang">
            <option value="">--pilihan--</option>
            <option value="1" {{ $jurusan->jenjang == 'S1' ? 'selected' : '' }}>S1</option>
            <option value="2" {{ $jurusan->jenjang == 'S2' ? 'selected' : '' }}>S2</option>
            <option value="3" {{ $jurusan->jenjang == 'D3' ? 'selected' : '' }}>D3</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button> <a href="{{ route('jurusan.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
