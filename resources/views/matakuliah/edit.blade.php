@extends('layout.main')

@section('title', 'Mata Kuliah')

@section('cardTitle','Edit Mata Kuliah')
@section('content')

    <form method="POST" action="{{route('matakuliah.update',$matakuliah->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Mata kuliah</label>
            <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Mata kuliah" value="{{$matakuliah->kode_mk}}" required>
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Nama Mata kuliah</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mata kuliah" value="{{$matakuliah->mata_kuliah}}" required>
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Jumlah SKS</label>
            <input type="number" class="form-control" name="jml_sks" placeholder="Masukkan Jumlah SKS" value="{{$matakuliah->jumlah_sks}}" required>
        </div>
        <div class="mb-3">
            <a href="{{route('matakuliah.index')}}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

