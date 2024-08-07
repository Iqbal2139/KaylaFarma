@extends('layouts.main')
@section('content')
{{-- Style --}}
<style>
    .carousel-inner > .carousel-item > img {
        width:640px;
        height:600px;
    }
    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.377);
      background-size: cover;
      border-radius: 16px
    }
    .align-c {
        align-content: center
    }
</style>
    {{-- Carousel --}}
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{URL::asset('/images/Carou-1.png')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption shadow">
                    <h1>Providing the best pharmacy services</h1>
                    <p>Memberikan layanan apotek terbaik</p>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/Carou-2.png')}}" class="d-block w-100" alt="...">
            <div class="container">
              <div class="carousel-caption shadow">
                <h1>Providing reliable health consultation services</h1>
                <p>Memberikan layanan konsultasi kesehatan yang terpercaya</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/Carou-3.png')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption shadow">
                    <h1>Strategic, comfortable and hygienic pharmacy</h1>
                    <p>Apotek yang strategis, nyaman dan higienis</p>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/Carou-4.png')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption shadow">
                    <h1>Provides various medicines and medical devices</h1>
                    <p>Menyediakan bermacam obat dan alat kesehatan</p>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/Carou-5.png')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption shadow">
                    <h1>Comfortable waiting area for its visitors</h1>
                    <p>Tempat tunggu yang nyaman bagi pengunjungnya</p>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('/images/Carou-6.png')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption shadow">
                    <h1>Quality medicine stock and well maintained storage</h1>
                    <p>Stock obat yang berkualitas dan terjaga penyimpanannya</p>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- Feature --}}
    <h1 class="visually-hidden"></h1>

    <div class="container px-4 mt-5 py-5" id="featured-3">
      <h2 class="pb-2 border-bottom">Layanan Terbaik Kami</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-light fs-2 mb-3">
            <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M552.4 589.8v-34c0-3.3-2.7-6-6-6h-58c-3.3 0-6 2.7-6 6v30.8c0 11.1-9 20.2-20.2 20.2h-29.8c-3.3 0-6 2.7-6 6v58c0 3.3 2.7 6 6 6h17.5c5.3 0 13.5 4.3 13.5 9.5l1 39.7c0 9.8 2.9 17.7 12.7 17.7h12.5c4.3 0 8.2 1.5 11.2-1h42.5c4.9 0 9-4.1 9-9v-38.1c0-10.4 8.4-18.9 18.9-18.9h39.1c3.3 0 6-2.7 6-6V603c0-7.3-5.9-13.2-13.2-13.2h-50.7z" fill="#F9C0C0" /><path d="M434.5 263.7h235.6v8H434.5z" fill="#808080" /><path d="M637.4 927.6H384.1c-70.9 0-128.6-57.7-128.6-128.6V470.8c0-32.2 12.1-63 34-86.9 20.2-22 47-36.2 76.1-40.4v-12.8h-46.9c-11.4 0-20.7-9.3-20.7-20.7v-33c0-11.4 9.3-20.7 20.7-20.7h18.9V123.2c0-11.4 9.3-20.7 20.7-20.7h303.9c11.4 0 20.7 9.3 20.7 20.7v133.2h18.9c11.4 0 20.7 9.3 20.7 20.7v33c0 11.4-9.3 20.7-20.7 20.7h-46v12.8c29.2 4.2 56 18.4 76.2 40.4 21.9 23.8 34 54.7 34 86.9V799c0 70.9-57.7 128.6-128.6 128.6zM318.7 271.3c-3.1 0-5.7 2.6-5.7 5.7v33c0 3.1 2.6 5.7 5.7 5.7h61.9V357l-6.8 0.6c-28 2.6-54 15.5-73.3 36.4-19.4 21.1-30 48.3-30 76.7v328.1c0 62.6 51 113.6 113.6 113.6h253.2c62.6 0 113.6-51 113.6-113.6v-328c0-28.4-10.7-55.7-30-76.7-19.2-20.9-45.3-33.9-73.3-36.4l-6.8-0.6v-41.3h61c3.2 0 5.7-2.6 5.7-5.7v-33c0-3.1-2.6-5.7-5.7-5.7H668V123.2c0-3.1-2.6-5.7-5.7-5.7H358.4c-3.1 0-5.7 2.6-5.7 5.7v148.2h-34v-0.1z" fill="#808080" /><path d="M763.3 793.6H259.8V477.3h503.5v316.3z m-495.5-8h487.5V485.3H267.8v300.3zM346.4 263.7h48.4v8h-48.4zM377.2 315.4h270.9v8H377.2zM639.1 109.7h8v157.5h-8zM608.9 109.1h8v158.6h-8zM578.6 109.1h8v157.5h-8zM548.3 109.1h8v157.5h-8z" fill="#808080" /><path d="M540.2 750.1h-61.7c-9.5 0-17.2-7.7-17.2-17.2v-39.6c0-5.1-4.1-9.2-9.2-9.2h-39.6c-9.5 0-17.2-7.7-17.2-17.2v-61.7c0-9.5 7.7-17.2 17.2-17.2h0.7v8h-0.7c-5.1 0-9.2 4.1-9.2 9.2v61.7c0 5.1 4.1 9.2 9.2 9.2h39.6c9.5 0 17.2 7.7 17.2 17.2v39.6c0 5.1 4.1 9.2 9.2 9.2h61.7c5.1 0 9.2-4.1 9.2-9.2v-39.6c0-9.5 7.7-17.2 17.2-17.2h39.6c5.1 0 9.2-4.1 9.2-9.2v-61.7c0-5.1-4.1-9.2-9.2-9.2h-39.6c-9.5 0-17.2-7.7-17.2-17.2v-39.6c0-5.1-4.1-9.2-9.2-9.2h-61.7c-5.1 0-9.2 4.1-9.2 9.2v39.6c0 9.5-7.7 17.2-17.2 17.2h-9.9v-8h9.9c5.1 0 9.2-4.1 9.2-9.2v-39.6c0-9.5 7.7-17.2 17.2-17.2h61.7c9.5 0 17.2 7.7 17.2 17.2v39.6c0 5.1 4.1 9.2 9.2 9.2h39.6c9.5 0 17.2 7.7 17.2 17.2v61.7c0 9.5-7.7 17.2-17.2 17.2h-39.6c-5.1 0-9.2 4.1-9.2 9.2v39.6c0 9.5-7.7 17.2-17.2 17.2z" fill="#CE0202" /></svg>
          </div>
          <h3 class="fs-2">Obat-obatan yang lengkap dan berkualitas</h3>
          <p>Kami menyediakan obat-obat yang berkualitas tinggi dan disimpan dengan sistem penyimpanan yang baik.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-light fs-2 mb-3">
            <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M99 331.8h210.5v68.6H99zM739.9 331.8h210.5v68.6H739.9zM546.9 557.8v-24.3c0-3.6-3-6.6-6.6-6.6h-43.9c-3.6 0-6.6 3-6.6 6.6v21.7c0 10-8.1 18.2-18.2 18.2h-20.9c-3.6 0-6.6 3-6.6 6.6v43.9c0 3.6 3 6.6 6.6 6.6h12.5c4.3 0 11 3.5 11 7.8l0.8 32.4c0 8 2.4 14.5 10.4 14.5h10.2c3.3 0 6.3 1.1 8.7-0.5 0.3-0.2 0.6-0.3 0.9-0.3h32.5c5 0 9.1-4.1 9.1-9.1v-27.7c0-9.5 7.7-17.1 17.1-17.1h28.5c3.6 0 6.6-3 6.6-6.6V572c0-6.9-5.6-12.5-12.5-12.5h-38c-0.8 0-1.6-0.8-1.6-1.7z" fill="#F9C0C0" /><path d="M536.6 690.1H487c-8.1 0-14.6-6.6-14.6-14.6v-31.9c0-3.6-3-6.6-6.6-6.6H434c-8.1 0-14.6-6.6-14.6-14.6v-49.6c0-8.1 6.6-14.6 14.6-14.6h0.6v8h-0.6c-3.6 0-6.6 3-6.6 6.6v49.6c0 3.6 3 6.6 6.6 6.6h31.9c8.1 0 14.6 6.6 14.6 14.6v31.9c0 3.6 3 6.6 6.6 6.6h49.6c3.7 0 6.6-3 6.6-6.6v-31.9c0-8.1 6.6-14.6 14.6-14.6h31.9c3.6 0 6.6-3 6.6-6.6v-49.6c0-3.6-3-6.6-6.6-6.6h-31.9c-8.1 0-14.6-6.6-14.6-14.6v-31.9c0-3.6-3-6.6-6.6-6.6h-49.6c-3.6 0-6.6 3-6.6 6.6v31.9c0 8.1-6.6 14.6-14.6 14.6h-8v-8h8c3.6 0 6.6-3 6.6-6.6v-31.9c0-8.1 6.6-14.6 14.6-14.6h49.6c8.1 0 14.6 6.6 14.6 14.6v31.9c0 3.6 3 6.6 6.6 6.6h31.9c8.1 0 14.6 6.6 14.6 14.6v49.6c0 8.1-6.6 14.6-14.6 14.6h-31.9c-3.6 0-6.6 3-6.6 6.6v31.9c-0.1 8-6.6 14.6-14.7 14.6z" fill="#CE0202" /><path d="M511.4 479.8c31.4 0 61 12.2 83.3 34.5 22.2 22.2 34.5 51.8 34.5 83.3s-12.2 61-34.5 83.3c-22.2 22.2-51.8 34.5-83.3 34.5s-61-12.2-83.3-34.5c-22.2-22.2-34.5-51.8-34.5-83.3s12.2-61 34.5-83.3c22.3-22.2 51.9-34.5 83.3-34.5m0-15c-73.3 0-132.7 59.4-132.7 132.7s59.4 132.7 132.7 132.7 132.7-59.4 132.7-132.7-59.4-132.7-132.7-132.7z" fill="#999999" /><path d="M798.7 836.5H218.8c-26.2 0-47.5-21.3-47.5-47.5V603c0-53.9 21.1-104.7 59.5-143 38.4-38.4 89.1-59.5 143-59.5h269.9c53.9 0 104.7 21.1 143 59.5 38.4 38.4 59.5 89.1 59.5 143v186c0 26.2-21.3 47.5-47.5 47.5zM373.8 415.6c-49.9 0-96.9 19.6-132.4 55.1s-55.1 82.5-55.1 132.4v186c0 17.9 14.6 32.5 32.5 32.5h579.9c17.9 0 32.5-14.6 32.5-32.5v-186c0-49.9-19.6-96.9-55.1-132.4s-82.5-55.1-132.4-55.1H373.8z" fill="#999999" /><path d="M178.8 768.3h659.9v8H178.8zM936.2 409H728.1c-12 0-21.7-9.7-21.7-21.6v-67.6l-7.5-8c-3-3.2-7.3-5.1-11.8-5.1H336.3c-4.4 0-8.7 1.9-11.8 5.1l-7.5 8v67.6c0 11.9-9.7 21.6-21.7 21.6H87.2c-12 0-21.7-9.7-21.7-21.6v-65.8c0-11.9 9.7-21.6 21.7-21.6h47.3l79.3-95.7c5.9-7.2 14.7-11.3 24-11.3h547.8c9.3 0 18 4.1 24 11.3l79.3 95.7h47.3c12 0 21.7 9.7 21.7 21.6v65.8c0 12-9.7 21.6-21.7 21.6zM336.3 291.8h350.8c8.6 0 16.8 3.6 22.7 9.8l11.6 12.3v73.5c0 3.6 3 6.6 6.7 6.6h208.1c3.7 0 6.7-3 6.7-6.6v-65.8c0-3.6-3-6.6-6.7-6.6h-54.4L798 213.9c-3.1-3.7-7.6-5.8-12.4-5.8H237.8c-4.8 0-9.4 2.1-12.4 5.8L141.5 315H87.2c-3.7 0-6.7 3-6.7 6.6v65.8c0 3.6 3 6.6 6.7 6.6h208.1c3.7 0 6.7-3 6.7-6.6v-73.5l11.6-12.3c5.8-6.2 14.1-9.8 22.7-9.8z" fill="#999999" /><path d="M570.6 415H452.8V293h117.9v122z m-102.8-15h87.9v-92h-87.9v92zM138 306.7h91.1v8H138zM793.2 306.7h91.1v8h-91.1zM271.6 306.7h37.8v8h-37.8zM715.1 306.7h37.8v8h-37.8z" fill="#999999" /></svg>
          </div>
          <h3 class="fs-2">Layanan konsultasi kesehatan dan pesan antar obat</h3>
          <p>Kami menyediakan layanan konsultasi kesehatan yang sesuai dengan kebutuhan anda dan pesan antar obat yang responsif.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-light fs-2 mb-3">
            <svg width="100px" height="100px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M404.1 666.5m-215.3 0a215.3 215.3 0 1 0 430.6 0 215.3 215.3 0 1 0-430.6 0Z" fill="#F9C0C0" /><path d="M395.3 888.2c-61.5 0-119.3-23.9-162.7-67.4-43.5-43.5-67.4-101.3-67.4-162.7s23.9-119.3 67.4-162.7c43.5-43.5 101.3-67.4 162.7-67.4s119.3 23.9 162.7 67.4c43.5 43.5 67.4 101.3 67.4 162.7S601.5 777.4 558 820.8c-43.4 43.5-101.2 67.4-162.7 67.4z m0-452.3c-59.3 0-115.1 23.1-157.1 65.1s-65.1 97.7-65.1 157.1 23.1 115.1 65.1 157.1 97.7 65.1 157.1 65.1 115.1-23.1 157.1-65.1 65.1-97.7 65.1-157.1S594.4 543 552.4 501c-41.9-42-97.7-65.1-157.1-65.1z" fill="#999999" /><path d="M395.3 658.1m-41.1 0a41.1 41.1 0 1 0 82.2 0 41.1 41.1 0 1 0-82.2 0Z" fill="#F2F2F2" /><path d="M395.3 703.2c-24.9 0-45.1-20.2-45.1-45.1s20.2-45.1 45.1-45.1 45.1 20.2 45.1 45.1-20.2 45.1-45.1 45.1z m0-82.2c-20.5 0-37.1 16.7-37.1 37.1s16.7 37.1 37.1 37.1 37.1-16.7 37.1-37.1-16.6-37.1-37.1-37.1zM402.5 382.3h-15V264.1L306 114.4h-82.3v-15h91.2l87.6 160.9z" fill="#999999" /><path d="M727.4 495.9H598.2v-15h129.2c3.4 0 6.2-2.8 6.2-6.2V342.2c0-3.4-2.8-6.2-6.2-6.2H408.7c-3.4 0-6.2 2.8-6.2 6.2v51.4h-15v-51.4c0-11.7 9.5-21.2 21.2-21.2h318.7c11.7 0 21.2 9.5 21.2 21.2v132.5c0 11.6-9.5 21.2-21.2 21.2z" fill="#999999" /><path d="M837 655.8H659.3v-15H837c3.4 0 6.2-2.8 6.2-6.2V502.1c0-3.4-2.8-6.2-6.2-6.2H598.2v-15H837c11.7 0 21.2 9.5 21.2 21.2v132.5c0 11.7-9.5 21.2-21.2 21.2z" fill="#999999" /><path d="M843.2 537.5h15v269.6h-15zM230.51 817.465l40.37-40.382 5.657 5.656-40.37 40.381zM514.84 533.233l40.375-40.375 5.657 5.657-40.375 40.375zM231.08 499.356l5.657-5.656 37.97 37.97-5.656 5.658zM516.172 784.453l5.657-5.656 37.971 37.97-5.657 5.658zM395.3 685.2c-14.9 0-27.1-12.1-27.1-27.1 0-14.9 12.1-27.1 27.1-27.1s27.1 12.1 27.1 27.1c0 14.9-12.1 27.1-27.1 27.1z m0-46.2c-10.5 0-19.1 8.6-19.1 19.1s8.6 19.1 19.1 19.1 19.1-8.6 19.1-19.1-8.5-19.1-19.1-19.1z" fill="#999999" /><path d="M850.3 927.9c-35.6 0-64.6-29-64.6-64.6s29-64.6 64.6-64.6 64.6 29 64.6 64.6c0 35.6-29 64.6-64.6 64.6z m0-114.2c-27.4 0-49.6 22.3-49.6 49.6s22.3 49.6 49.6 49.6 49.6-22.3 49.6-49.6-22.3-49.6-49.6-49.6z" fill="#999999" /><path d="M850.3 889c-14.2 0-25.8-11.6-25.8-25.8s11.6-25.8 25.8-25.8 25.8 11.6 25.8 25.8c-0.1 14.3-11.6 25.8-25.8 25.8z m0-43.5c-9.8 0-17.8 8-17.8 17.8s8 17.8 17.8 17.8 17.8-8 17.8-17.8c-0.1-9.8-8-17.8-17.8-17.8z" fill="#999999" /><path d="M395.3 929.4c-72.5 0-140.6-28.2-191.9-79.5-51.2-51.2-79.4-119.3-79.4-191.8s28.2-140.6 79.5-191.9 119.4-79.5 191.9-79.5S536 415 587.2 466.2c51.3 51.3 79.5 119.4 79.5 191.9S638.5 798.7 587.2 850c-51.2 51.2-119.4 79.4-191.9 79.4z m0-527.7c-68.5 0-132.8 26.7-181.3 75.1-48.3 48.4-75 112.8-75 181.3s26.7 132.8 75.1 181.3c48.4 48.4 112.8 75.1 181.3 75.1s132.8-26.7 181.3-75.1c48.4-48.4 75.1-112.8 75.1-181.3s-26.7-132.8-75.1-181.3c-48.5-48.4-112.9-75.1-181.4-75.1z" fill="#CE0202" /></svg>
          </div>
          <h3 class="fs-2">Alat-alat kesehatan terbaik</h3>
          <p>Kami menyediakan alat-alat kesehatan terbaik yang dibutuhkan anda.</p>
        </div>
      </div>

      <h2 class="pb-2 pt-3 mt-5 text-center">Keunggulan Kami</h2>
      <hr class="featurette-divider">
        <div class="row featurette py-4">
        <div class="col-md-7 align-c">
            <h2 class="featurette-heading fw-normal lh-1">Surat Izin Praktek Apoteker</h2>
            <p class="lead">Apotek kami sudah memiliki SIPA atau Surat Izin Praktik Apoteker yang di sahkan oleh DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU PEMERINTAH KABUPATEN BEKASI</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow" width="500" height="500" src="{{URL::asset('/images/Sertif-1.png')}}">
        </div>
        </div>

      <hr class="featurette-divider">
        


      <hr class="featurette-divider">
        <div class="row featurette py-4">
            <div class="col-md-7 order-md-2 align-c">
            <h2 class="featurette-heading fw-normal lh-1">Staf yang ramah dan profesional</h2>
            <p class="lead">Staf apoteker kami ramah, profesional, dan selalu memberikan solusi atas obat yang dibutuhkan oleh pengunjung.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow" width="500" height="500" src="{{URL::asset('/images/Staff.png')}}">
    
            </div>
        </div>
      <hr class="featurette-divider">
      <div class="row featurette py-4">
        <div class="col-md-7 align-c">
            <h2 class="featurette-heading fw-normal lh-1">Lokasi yang strategis dan salah satu apotek ternyaman di Kabupaten Bekasi</h2>
            <p class="lead">Apotek kami sudah menjadi salah satu tempat yang strategis dan nyaman untuk dikunjungi</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow" width="500" height="500" src="{{URL::asset('/images/Carou-3.png')}}">
        </div>
        </div>
    </div>

    
@endsection