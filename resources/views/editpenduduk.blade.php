@extends('layouts.main')
@section('title', 'Halaman Edit Penduduk')
    
@section('content')
    <h1>HALAMAN | EDIT PENDUDUK</h1>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="/update/{{ $ep -> id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" placeholder="Masukan NIK" value="{{ $ep->nik }}" required>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="{{ $ep->nama }}" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{ $ep->alamat }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="{{ $ep->email }}" required>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukan No Telepon" value="{{ $ep->telepon }}" required>
                </div>
                <div class="form-group">
                    <label>Tanggal_lahir</label>
                    <input type="date" name="tanggal_lahir"  class="form-control" value="{{ $ep->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection