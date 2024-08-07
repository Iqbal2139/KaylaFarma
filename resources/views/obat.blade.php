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
          <h1 class="fw-bold">Obat-Obatan</h1>
        </div>
      </div>
    </section>
  
    <div class="album py-5">
      <div class="container mb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-1.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-1.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: GASTRUCID SYR 80 ML</p>
                <p class="card-text">Harga: Rp.7700,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-2.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-2.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: ROVERTON SYR 60 ML</p>
                <p class="card-text">Harga: Rp.6600.-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-3.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-3.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: DIONICOL 500MG TAB</p>
                <p class="card-text">Harga: Rp.11800,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-4.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-4.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: RAMOLIT</p>
                <p class="card-text">Harga: Rp.1000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-5.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-5.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: ITRAMOL SYR</p>
                <p class="card-text">Harga: Rp.5900,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-6.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-6.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: ETAFEN SYR</p>
                <p class="card-text">Harga: Rp.6000,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-7.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-7.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: ANTASIDA DOEN POT TRIMAN</p>
                <p class="card-text">Harga: Rp.9500,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-8.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-8.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: AMLODIPINE 5 MG</p>
                <p class="card-text">Harga: Rp.2550,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-9.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-9.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: ANELAT TAB</p>
                <p class="card-text">Harga: Rp.1850,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-10.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-10.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: LAMBUCID TAB</p>
                <p class="card-text">Harga: Rp.2211,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-11.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-11.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: HUFAGESIC TAB</p>
                <p class="card-text">Harga: Rp.3300,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow">
              <a href="{{URL::asset('/images/OBAT-12.jpeg')}}" target="_blank"><img src="{{URL::asset('/images/OBAT-12.jpeg')}}" class="bd-placeholder-img card-img-top" width="100%" height="225"></img></a>
              <div class="card-body text-center bg-blue text-white">
                <p class="card-text">Nama Obat: PARATENSA SYR</p>
                <p class="card-text">Harga: Rp.8750,-</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection