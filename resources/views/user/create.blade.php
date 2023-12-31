@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New User</h1>
</div>
<div class="row justify-content-center my-5">
<div class="col-md-8">

    <form action="/main/user/" method="post">
        @csrf

        <div class="row mb-3">
          <label for="post_id" class="col-sm-2 col-form-label">karyawan</label>
          <div class="col-sm-10">
          <select class="form-select"name="post_id" id="post_id">
            @foreach ($userss as $u)
              
           
            <option value="{{ $u->id }}">{{ $u->nama }}</option> 
            @endforeach
          </select>
            @error('post_id')
            <div class="invalid-feedback text-left">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('username') is-invalid    
              @enderror" id="username" name="username"  value="{{ old('username') }}">
              @error('username')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('email') is-invalid    
              @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
            <select class="form-select"name="role" id="role">
              
              <option value="admin">admin</option> 
              <option value="plant">plant</option> 
              <option value="personal" selected>personal</option> 
             
             
            </select>
              @error('role')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('password') is-invalid    
              @enderror" id="password" name="password"  >
              @error('password')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        <a href="/main/user" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
</div>
 

@endsection