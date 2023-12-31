@extends('layouts.Main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome Back {{ auth()->user()->username; }}</h1>
</div>
<div class="card">
    <h5 class="card-header">Perkebunan Nusantara VI</h5>
    <div class="card-body">
        
        <center>

        
        <img src="/img/pag-galeri-01.jpg" width="720">
    </center>
      <h5 class="card-title"></h5>
      <p class="card-text">PTPN VI memiliki 14 (empat belas) Unit Usaha, 8 (delapan) Pabrik Kelapa Sawit (PKS) dengan kapasitas keseluruhan 305 ton TBS per jam, 1 (satu) pabrik karet remah (CRF) dengan kapasitas pengolahan 20 ton karet kering per hari, 2 (dua) pabrik teh dengan kapasitas pengolahan 125 ton daun basah per hari, dan 2 (dua) unit mesin teh celup dengan kapasitas 1 (satu) mesin teh celup 150 kotak per jam atau 2,5 kotak per menit. Bahan baku pengolahan pabrik, selain diperoleh dari hasil panen perkebunan sendiri, perusahaan juga membeli Tandan Buah Segar (TBS) kelapa sawit, Bahan Olah Karet (Bokar), dan pucuk daun teh dari petani pekebun di sekitar lokasi keberadaan perusahaan.

        Sebagai realisasi dari upaya perluasan areal, PTPN VI saat ini memiliki anak perusahaan, yaitu :
        PT. Alam Lestari Nusantara</p>
     
    </div>
  </div>

@endsection