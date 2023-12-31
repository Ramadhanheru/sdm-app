@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Karyawan</h1>
</div>
<div class="row justify-content-center my-5">
<div class="col-md-8">

    <form action="/main/post/{{ $posts->id }}" method="post">
      @method('put')
        @csrf
        <div class="row mb-3">
          <label for="nik" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('nik') is-invalid    
            @enderror" id="nik" name="nik" value="{{ old('nik',$posts->nik)  }}"  >
            @error('nik')
            <div class="invalid-feedback text-left">
              {{ $message }}
            </div>
            @enderror
          </div>
         
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama') is-invalid    
              @enderror" id="nama" name="nama" value="{{ old('nama',$posts->nama)  }}" >
              @error('nama')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('jabatan') is-invalid    
              @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan',$posts->jabatan)  }}" >
              @error('jabatan')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Kode Unit</label>
            <div class="col-sm-10">
            <select class="form-select"name="category_id" id="category_id">
              @foreach ( $category as $c )
              @if (old('category_id', $posts->category_id)==$c->id)

              <option value="{{ $c->id }}" selected>{{ $c->kode_unit  }} | {{ $c->nama_unit }}</option>
              @else
              <option value="{{ $c->id }}">{{ $c->kode_unit }} | {{ $c->nama_unit }}</option> 
              @endif
              @endforeach
            </select>
              @error('category_id')
              <div class="invalid-feedback text-left">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        <a href="/main/post" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
</div>
 

@endsection