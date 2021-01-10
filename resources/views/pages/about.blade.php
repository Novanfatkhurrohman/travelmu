@extends('layouts.about')
@section('title')
About
@endsection

@section('content')
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
  <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0"">
            <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">
                            Tentang Kami
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Details
                        </li>
                    </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Peninda</h1>
                        <p>
                            Republic of Indonesia Raya
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="frontend/images/details-1.jpg"
                                    xoriginal="frontend/images/details-1.jpg" />
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/details-1.jpg"><img class="xzoom-gallery" width="128"
                                            src="frontend/images/details-1.jpg"
                                            xpreview="frontend/images/details-1.jpg" /></a>
                                    <a href="frontend/images/details-1.jpg"><img class="xzoom-gallery" width="128"
                                            src="frontend/images/details-1.jpg"
                                            xpreview="frontend/images/details-1.jpg" /></a>
                                    <a href="frontend/images/details-1.jpg"><img class="xzoom-gallery" width="128"
                                            src="frontend/images/details-1.jpg"
                                            xpreview="frontend/images/details-1.jpg" /></a>
                                    <a href="frontend/images/details-1.jpg"><img class="xzoom-gallery" width="128"
                                            src="frontend/images/details-1.jpg"
                                            xpreview="frontend/images/details-1.jpg" /></a>
                                    <a href="frontend/images/details-1.jpg"><img class="xzoom-gallery" width="128"
                                            src="frontend/images/details-1.jpg"
                                            xpreview="frontend/images/details-1.jpg" /></a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Nusa Penida is an island southeast of Indonesia’s island
                                Bali and a district of Klungkung Regency that includes the
                                neighbouring small island of Nusa Lembongan. The Badung
                                Strait separates the island and Bali. The interior of Nusa
                                Penida is hilly with a maximum altitude of 524 metres. It is
                                drier than the nearby island of Bali.
                            </p>
                            <p>
                                Bali and a district of Klungkung Regency that includes the
                                neighbouring small island of Nusa Lembongan. The Badung
                                Strait separates the island and Bali.
                            </p>
                            <div class="features row pt-3">
                                <div class="col-md-4">
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Featured Ticket</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/ic_bahasa.png" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/ic_foods.png" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
