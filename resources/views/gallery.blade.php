@extends('layouts.main')
@section('content')
{{-- Style --}}
<style>
    .bg-blue {
        background-color: rgb(22, 88, 163)
      }
</style>
    {{-- Feature --}}
    <section class="mt-5 py-5 text-center container-fluid bg-blue">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto text-white">
          <h1 class="fw-bold">Galeri Kami</h1>
          <p class="lead">Kumpulan Foto mengenai kegiatan sehari-hari kami bersama pengunjung dan staff</p>
        </div>
      </div>
    </section>
  
    <div class="album py-5">
      <div class="container mb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-1.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-1.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Konsultasi obat bersama apoteker</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-2.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-2.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Tempat layanan administratif dan konsultasi kesehatan</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-3.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-3.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Lokasi apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-4.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-4.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Beberapa obat-obatan yang tersedia di Apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-5.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-5.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Tempat tunggu di Apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-6.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-6.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Stock obat-obatan Apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Staff.png')}}" target="_blank"><img src="{{URL::asset('/images/Staff.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Staff Apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-7.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-7.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Staff melayani pengunjung</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/Carou-8.png')}}" target="_blank"><img src="{{URL::asset('/images/Carou-8.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Foto Ruangan Apotek Kayla Farma</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection