@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Show Users</h1>
</div>
<div class="row justify-content-center my-5">
<div class="col-md-8">


        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" readonly value="{{ $user->post->nik }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail1" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail1" readonly value="{{ $user->username }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail34" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail34" readonly value="{{ $user->email }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail5" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail5" readonly value="{{ $user->role }}">
            </div>
          </div>
         
        <a href="/main/user" class="btn btn-primary">Back</a>
 


</div>
</div>
 

@endsection