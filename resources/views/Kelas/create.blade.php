@extends('layout/main')

@section('title','Form Tambah Data Ruangan')

@section('conten')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Selamat Datang</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index">Data Ruangan</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
@endsection
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
       <h1 class="mt-3">Form Tambah Data Ruangan</h1>
       <form method="post" action="/Kelas">
       @csrf
         <div class="form-group">
             <label for="kode_ruangan">Kode Ruangan</label>
             <input type="text" class="form-control @error('kode_ruangan') is-invalid @enderror" id="kode_ruangan" placeholder="Masukan Kode" name="kode_ruangan">
         @error('kode_ruangan')
         <div class="invalid-feedback">{{ $massage }}</div>
         @enderror
         </div>
         <div class="form-group">
             <label for="nama_gedung">Nama Gedung</label>
             <input type="text" class="form-control @error('nama_gedung') is-invalid @enderror" id="nama_gedung" placeholder="Masukan Nama Gedung" name="nama_gedung">
             @error('nama_gedung')
         <div class="invalid-feedback">{{ $massage }}</div>
         @enderror
         </div>
         <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
  </div>
</div>
@endsection

