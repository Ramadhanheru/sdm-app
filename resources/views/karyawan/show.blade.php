@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Show Karyawan</h1>
</div>
<div class="row justify-content-center my-5">
<div class="col-md-8">


        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" readonly value="{{ $posts->nik }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail1" class="col-sm-2 col-form-label">nama Unit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail1" readonly value="{{ $posts->nama }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail34" class="col-sm-2 col-form-label">alias</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail34" readonly value="{{ $posts->jabatan }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail5" class="col-sm-2 col-form-label">Kode Unit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail5" readonly value="{{ $posts->category->kode_unit }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail6" class="col-sm-2 col-form-label">Nama Unit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail6" readonly value="{{ $posts->category->nama_unit }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail7" class="col-sm-2 col-form-label">Nickname Unit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail7" readonly value="{{ $posts->category->nickname }}">
            </div>
          </div>
        <a href="/main/post" class="btn btn-primary">Back</a>
 


</div>
</div>
 

@endsection