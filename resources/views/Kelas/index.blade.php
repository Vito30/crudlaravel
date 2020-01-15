@extends('layout/main')

@section('title','Ruang Kelas')

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
    <div class="col-10">
       <h1 class="mt-3">Daftar Ruang Kelas</h1>
         
         @if(session('status'))
         <div class="alert alert-success">
         {{ session('status')}}
         </div>
         @endif
       <table class="table">
         <thead class="thead-dark">
          <tr>
           <th scope="col">ID</th>
           <th scope="col">Kode Ruangan</th>
           <th scope="col">Nama Gedung</th>
           <th scope="col">Aksi</th>
          </tr>
         </thead>
         <tbody>
         @foreach( $ruang as $rng)
         <tr>
           <th scope="row">{{ $loop->iteration}}</th>
           <td>{{ $rng->kode_ruangan }}</td>
           <td>{{ $rng->nama_gedung }}</td>
           <td>
             <a href="" class="badge badge-success">Edit</a>
             <a href="" class="badge badge-danger">Hapus</a>
           </td>
           </tr>
           @endforeach
            
         </tbody>
       </table>
       <a href="/Kelas/create" class="btn btn-primary">Tambah Data Ruangan</a>
    </div>
  </div>
</div>
@endsection

