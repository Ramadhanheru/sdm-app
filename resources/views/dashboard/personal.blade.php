@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome Back {{ auth()->user()->username; }}</h1>

</div>
  <div class="card" style="width: 18rem;">
    <img src="/img/11667132_20943447.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Data Diri Karyawan</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $users->username }}</li>
      <li class="list-group-item">{{ $users->email }}</li>
      <li class="list-group-item">{{ $users->post->nama }}</li>
      <li class="list-group-item">{{ $users->post->nik }}</li>
      <li class="list-group-item">{{ $users->post->jabatan }}</li>
      <li class="list-group-item">{{ $users->post->category->nama_unit }}</li>
      <li class="list-group-item">{{ $users->post->category->nickname }}</li>
      <li class="list-group-item">A third item</li>
    </ul>
  </div>
@endsection