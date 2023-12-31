@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Users  

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
  <a href="/main/user/create" class="btn btn-primary mb-3">Create New User</a>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
          <th>No</th>
            <th>Nama Karyawan</th>
            <th>Unit Usaha</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($userss as $usr )
      
        <tr>
          <td> {{ $loop->iteration }}</td>
            <td>{{ $usr->post->nik }}</td>
            <td>{{ $usr->post->category->kode_unit }}</td>
            <td>{{ $usr->username }}</td>
            <td>{{ $usr->email }}</td>
            <td>{{ $usr->password }}</td>
            <td>{{ $usr->role }}</td>
      
            <td><a href="/main/user/{{ $usr->id }}" class="badge bg-info"><span data-feather='eye' ></span></a>
              <a href="/main/user/{{ $usr->id }}/edit" class="badge bg-warning"><span data-feather='edit'></span></a>
              <form action="/main/user/{{ $usr->id }}" method="POST" class="d-inline">
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