@extends('layout.main')

@section('title', 'Mata Kuliah')

@section('cardTitle','Daftar Mata Kuliah')

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>

    @endif

    <a href="{{ route('matakuliah.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>Jumlah SKS</th>
                <th>Created Date</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataKuliah as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->kode_mk}}</td>
                    <td>{{ $item->mata_kuliah}}</td>
                    <td>{{ $item->jumlah_sks}}</td>
                    <td>{{ $item->created_at}}</td>
                    <td><form method="POST" action="{{ route('matakuliah.destroy',$item->id) }}">
                            @csrf
                            @method('DELETE')
                        <a href ="{{ route('matakuliah.edit',$item->id) }}" class="btn btn-warning">Update</a>
                        <button type="submit" action="{{ route('matakuliah.destroy',$item->id) }}" class="btn btn-primary">Delete</a></form></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
