@extends('layouts.app')

@section('title')
Bolodolan
@endsection

 @section('content')
  <!-- Awal Header -->
  <header class="header text-center">
    <div class="container img-fluid">
    </div>
    <h1>
      Explore The Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br />
      moment you never see before
    </p>
    </div>
  </header>
  <!-- Akhir Header -->

  <!-- Awal Hero -->
  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2 class="text-center">20K</h2>
          <p class="text-center">Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2 class="text-center">12</h2>
          <p class="text-center">Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2 class="text-center">3K</h2>
          <p class="text-center">Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2 class="text-center">72</h2>
          <p class="text-center">Partners</p>
        </div>
      </section>
    </div>
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br />
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/boro1.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-2.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BROMO, MALANG</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">NUSA PENIDA</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/sanga.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BAHARI</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Hero -->

    <!-- Awal Content -->
    <section class="section-content" id="networks">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="col-md-3">
              <img src="{{url('frontend/assets/images/ilustrasi/undraw_travelers_qlt1.png')}}" alt="">
            </div>
            <p class="text-left text-sm-left">BoloDolan Tour menawarkan berbagai,<br>
              destinasi wisata menarik di Indonesia <br>
              yangwajib untuk dikunjungi</p>
          </div>

          <div class="col-md-4">
            <div class="col-md-3">
              <img src="{{url('frontend/assets/images/ilustrasi/boking.png')}}" alt="">
            </div>
            <p class="text-left text-sm-left">BoloDolan Tour memiliki sistem
              reservasi online terintegrasi yang
              mudah digunakan dan user friendly</p>
          </div>

          <div class="col-md-4">
            <div class="col-md-3">
              <img src=" {{url('frontend/assets/images/ilustrasi/services.png')}}" alt="">
            </div>
            <p class="text-left text-sm-left">
              BoloDolan Tour berkomitmen memberikan
              pelayanan terbaik dan menjamin
              kepuasan pelanggan</p>
          </div>

        </div>
      </div>
    </section>



    <!-- Akhir Content -->

    <!-- Awal Pilihan -->
    <section class="section-pilihan id=" popularContent">
      <div class="container">
        <div class="section-pilihan-bolo row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/travel-3.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-bolo text-center d-flex flex-column"
              style="background-image: url('{{url('frontend/assets/images/dua.jpg')}}');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BOROBUDUR</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-right"> <br>
          <p>lkahdflahflahyfoi</p>
        </div>
      </div>
      </div>
    </section>

    <!-- Akhir Pilihan -->

    <!-- Hero Bawah awal -->
    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br />
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="{{url('frontend/assets/images/partner@2x.png')}}" class="img-patner" />
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonials-heading" id="testimonialsHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Bawah Akhir -->
  </main>
 @endsection
