@extends('layouts.main')
@section('content')
{{-- Style --}}
<style>
    .bg-blue {
        background-color: rgb(22, 163, 64)
      }
</style>
    {{-- Feature --}}
    <section class="mt-5 py-5 text-center container-fluid bg-blue">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto text-white">
          <h1 class="fw-bold">Alat Kesehatan</h1>
        </div>
      </div>
    </section>
  
    <div class="album py-5">
      <div class="container mb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-1.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-1.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Easy touch asam urat </p>
                <p class="card-text">Harga: Rp.95000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-2.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-2.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Timbangan</p>
                <p class="card-text">Harga: Rp.125000.-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-3.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-3.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Easy touch kolesterol</p>
                <p class="card-text">Harga: Rp.155000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-4.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-4.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: NEEDLE 24 ONEMED</p>
                <p class="card-text">Harga: Rp.2500,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-5.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-5.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Foley cateter</p>
                <p class="card-text">Harga: Rp.1500,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-6.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-6.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Tensimeter</p>
                <p class="card-text">Harga: Rp.90000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-7.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-7.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: Kassa 1 pax/ 10 pcs</p>
                <p class="card-text">Harga: Rp.50000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-8.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-8.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: GEA IV catheter 1 pcs</p>
                <p class="card-text">Harga: Rp.3900,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/ALKES-9.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/ALKES-9.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama ALKES: TERMOMETER DIGITAL</p>
                <p class="card-text">Harga: RP.25000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection