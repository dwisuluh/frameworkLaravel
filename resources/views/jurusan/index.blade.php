@extends('layouts.app')
@section('content')
    <h4>Menajemen Tabel Jurusan</h4>
    <a href="{{ route('jurusan.create') }}" class="btn btn-info btn-sm">Jurusan Baru</a>
    <table class="table table-responsive martop-sm">
        <thead>
            <th>NO</th>
            <th>NAMA JURUSAN</th>
            <th>JUMLAH SKS</th>
            <th>JENJANG</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            @foreach ($jurusan as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td>{{ $j->jumlah_sks }}</td>
                    <td>{{ $j->jenjang }}</td>
                    <td>
                        <form action="{{ route('jurusan.destroy', $j->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
