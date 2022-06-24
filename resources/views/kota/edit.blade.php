@extends('layouts.app')

@section('content')
    <h4>Ubah Kota</h4>
    <form action="{{ route('kota.update', $kota->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-group {{ $errors->has('kota') ? 'has-error' : '' }}">
            <label for="kota" class="control-label">Kota</label>
            <input type="text" name="nama_kota" class="form-control" placeholder="Kota" value="{{ $kota->nama_kota }}">
            @if ($errors->has('kota'))
                <span class="help-block">{{ $errors->first('kota') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('propinsi_id') ? 'has-error' : '' }}">
            <label for="propinsi" class="control-label">Propinsi</label>
            <select class="form-control" id="type" name="propinsi_id">
                <option value="">---pilih propinsi ------</option>
                @foreach ($propinsi as $prop)
                    <option value="{{ $prop->id }}"{{$prop->id == $kota->propinsi_id ? 'selected' : '' }}>{{ $prop->nama_propinsi }}</option>
                @endforeach
            </select>

            @if ($errors->has('propinsi_id'))
                <span class="help-block">{{ $errors->first('propinsi_id') }} </span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('kota.index') }}" class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
