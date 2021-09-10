@extends('layout.main')

@section('title', 'Mata Kuliah')

@section('cardTitle','Tambah Mata Kuliah')
@section('content')
    <form
 method="POST" action="{{route('matakuliah.store')}}">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Mata kuliah</label>
            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" placeholder="Masukkan Kode Mata kuliah" required>
            @error('kode')
                <label for="kode" class="invalid-feedback">{{$message}}</label>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Nama Mata kuliah</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama Mata kuliah" required>
            @error('nama')
                <label for="kode" class="invalid-feedback">{{$message}}</label>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Jumlah SKS</label>
            <input type="number " class="form-control @error('jml_sks') is-invalid @enderror" name="jml_sks" placeholder="Masukkan Jumlah SKS" required>
            @error('jml_sks')
                <label for="kode" class="invalid-feedback">{{$message}}</label>
            @enderror
        </div>
        <div class="mb-3">
            <a href="{{route('matakuliah.index')}}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

