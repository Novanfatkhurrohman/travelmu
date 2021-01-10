<!-- Awal navbar -->
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="index.html">
    <img src="{{url('frontend/assets/images/heri.png')}}" alt="" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
        <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item mx-md-2">
        <a class="nav-link" href="#">Paket Travel</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Services
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="tours.html">Tours</a>
            <a class="dropdown-item" href="gallery.html">Gallery</a>
            <a class="dropdown-item" href="opentrips.html">OpenTrip</a>
        </div>
        </li>
        <li class="nav-item mx-md-2">
        <a class="nav-link" href="about.html">About</a>
        </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
</div>
</nav>
</div>
<!-- Akhir Naavbar -->
