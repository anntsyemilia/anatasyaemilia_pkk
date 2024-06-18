@extends('layouts.main')
@section ('title', 'Halaman Movies')
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class ="card-body">
        <form action="/save" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukan NIK" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email" required>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Masukan No Telepon" required>
            </div>
            <div class="form-group">
                <label>Tanggal_lahir</label>
                <input type="date" name="tanggal_lahir"  class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>