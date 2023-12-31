<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 " style="{{ Request::is('main') ? 'color: rgb(0, 0, 0)' : '' }}" href="/main">
                <i data-feather="home"></i>
              Dashboard
            </a>
          </li>
          @if (auth()->user()->role === 'plant')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2"style="{{ Request::is('plant*') ? 'color: rgb(0, 0, 0)' : '' }}" href="plant/">
                <i data-feather="layers"></i>
                Karyawan 
            </a>
          </li>
          
          @elseif (auth()->user()->role === 'personal')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2"style="{{ Request::is('personal*') ? 'color: rgb(0, 0, 0)' : '' }}" href="/personal">
                <i data-feather="layers"></i>
                Data Diri Karyawan
            </a>
          </li>
          @endif
         @can('admin')
           
         
         <li class="nav-item">
           <a class="nav-link d-flex align-items-center gap-2"style="{{ Request::is('main/post*') ? 'color: rgb(0, 0, 0)' : '' }}" href="/main/post">
               <i data-feather="layers"></i>
               Karyawan
           </a>
         </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 "style="{{ Request::is('main/category*') ? 'color: rgb(0, 0, 0)' : '' }}" href="/main/category">
                <i data-feather="layers"></i>
              Unit Usaha
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" style="{{ Request::is('main/user*') ? 'color: rgb(0, 0, 0)' : '' }}" href="/main/user">
                <i data-feather="layers"></i>
              Daftar Users
            </a>
          </li>
          
          @endcan
       
        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link d-flex align-items-center gap-2">
                <i data-feather="log-out"></i>Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>