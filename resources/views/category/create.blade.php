@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Daftar Unit Usaha</h1>
</div>
<div class="row justify-content-center my-5">
<div class="col-md-8">
    
<form action="/main/category" method="post">
    @csrf
        <div class="row mb-3">
          <label for="kode_unit" class="col-sm-2 col-form-label">Kode Unit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('kode_unit') is-invalid    
            @enderror" id="kode_unit" name="kode_unit" value="{{ old('kode_unit') }}"  required>
            @error('kode_unit')
            <div class="invalid-feedback text-left">
              {{ $message }}
            </div>
            @enderror
          </div>
         
        </div>
        <div class="row mb-3">
            <label for="nama_unit" class="col-sm-2 col-form-label">nama Unit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_unit') is-invalid    
              @enderror" id="nama_unit" name="nama_unit" value="{{ old('nama_unit') }}" required>
              @error('nama_unit')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="alias" class="col-sm-2 col-form-label">alias</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('alias') is-invalid    
              @enderror" id="alias" name="alias" value="{{ old('alias') }}"required>
              @error('alias')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nickname') is-invalid    
              @enderror" id="nickname" name="nickname" value="{{ old('nickname') }}" required>
              @error('nickname')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <a href="/main/category" class="btn btn-warning">Back</a>
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>


</div>
</div>
 

@endsection