@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Karyawan  

  </h1>
</div>
<div class="row  my-5 mx-3">
<div class="col-md">
  @if (session()->has('success'))
            
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  <a href="/main/user/create" class="btn btn-primary mb-3">Create New Karyawan</a>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
          <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Kode Unit</th>
            <th>Nama Unit</th>
            <th>Nickname Unit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($posts as $c )
      
        <tr>
          <td> {{ $loop->iteration }}</td>
            <td>{{ $c->nik }}</td>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->jabatan }}</td>
            <td>{{ $c->category->kode_unit }}</td>
            <td>{{ $c->category->nama_unit }}</td>
            <td>{{ $c->category->nickname }}</td>
            <td><a href="/main/post/{{ $c->id }}" class="badge bg-info"><span data-feather='eye'></span></a>
              <a href="/main/post/{{ $c->id }}/edit" class="badge bg-warning"><span data-feather='edit'></span></a>
              <form action="/main/post/{{ $c->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure deleting data?')"><span data-feather='x-circle'></span></button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
  </table>

</div>
</div>
 

@endsection