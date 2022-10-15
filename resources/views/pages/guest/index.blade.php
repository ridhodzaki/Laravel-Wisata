@extends('layouts.guest')
@section('container')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light web-nav fixed-top">
  <div class="container">
    <a class="navbar-brand text-logo " href="#">
      <img src="/img/logo.png" alt="" width="100%" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#info">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="#wisata">Wisata</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<div class="container">

  <!-- Jumbotron -->
  <div class="jumbotron">
    <div class="container-fluid">
      <h5 class="titleJumbotron">Ayo kita Healing</h5>
      <h3 class="captionJumbotron">Jelajahi Berbagai Tempat Indah</h3>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <div class="container p-3 bg-white">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="container row">
          <div class="col">
            <span class="subtittle bold">Lokasi</span><br>
            <span class="subtittle">Dusun bandung jaya RT. 01/RW.01 desa Kiluan Negeri kec. kelumbayan, kab. Tanggamus provinsi lampung</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="container row">
          <div class="col">
            <span class="subtittle bold">Kontak</span><br>
            <span class="subtittle">+62 852-6937-4812</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="info" id="info">
    <div class="box p-3 mt-5 text-white">
      <div class="row">
        <!-- <div class="col-md-4 col-sm-12">
              <div class="container text-center">
                  <span class="subtittle bold">Logo</span>
              </div>
            </div> -->
        <div class="col-md-12 col-sm-12">
          <div class="container col">
            <br>
            <span class="subtext">Seputar Desa</span>
            <br><br>
            <span class="subtittle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id leo nec tellus hendrerit sodales. Morbi quam lectus, maximus sit amet consectetur eget, iaculis et eros. Sed ante neque, iaculis at faucibus id, efficitur at ex. Praesent non aliquam nulla. Aenean vehicula porta augue ac maximus. Mauris dolor enim, hendrerit in hendrerit vitae, fringilla ac odio. Donec in rhoncus sapien. Integer lobortis magna turpis, id semper diam porta vel. Nunc tempus augue sit amet egestas malesuada. Sed tincidunt sit amet enim vitae viverra.</span>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
<!-- Product -->
<section class="wisata" id="wisata">
  <div class="container mt-5">
    <div class="container-fluid">
      <h2 class="text-center">Tempat Wisata</h2>
      <h5 class="text-center">Kunjungi Berbagai tempat wisata yang menarik</h5>
      <hr class="">
    </div>
    <div class="row">
      @foreach($wisatas as $wisata)
      <div class="col-md-6">
        <div class="p-3">
          <div class="box-white">
            <img src="{{ asset('storage/' . $wisata->gambarWisata) }}" class="rounded" style="width:100%; height:400px; object-fit: cover;" alt="GambarWisata">
            <div class="p-4">
              <h5 class="mt-2">{{ $wisata['namaWisata'] }}</h5>
              <h6 class="mt-2">HTM: Rp. {{ $wisata['hargaWisata'] }} </h6>
              <div class="d-grid">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Lihat Detail
                </button>
                </d>
                <div class="collapse" id="collapseExample">
                  <div class="">
                    <hr>
                    {{ $wisata['deskripsiWisata'] }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>

</div>
@endsection