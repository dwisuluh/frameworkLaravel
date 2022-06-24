@extends('layouts.app')

@section('content')
    <h4>Kota Baru</h4>
    <form action="{{ route('kota.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('kota') ? 'has-error' : '' }}">
            <label for="kota" class="control-label">Kota</label>
            <input type="text" name="nama_kota" class="form-control" placeholder="Kota">
            @if ($errors->has('kota'))
                <span class="help-block">{{ $errors->first('kota') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('propinsi_id') ? 'has-error' : '' }}">
            <label for="propinsi" class="control-label">Propinsi</label>
            <select class="form-control" id="type" name="propinsi_id">
                <option value="">---pilih propinsi ------</option>
                @foreach ($kota as $prop)
                    <option value="{{ $prop->id }}">{{ $prop->nama_propinsi }}</option>
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
