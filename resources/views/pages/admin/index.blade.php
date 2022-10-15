@extends('layouts.guest')
@section('container')
<!-- Navbar -->
@include('components.navbaradmin')
<!-- Akhir Navbar -->

<div class="mt-5">
  <main class="">
    <div class="container mt-5">
      <div class="container-fluid" style="margin-top: 80px">
        <div class="row justify-content-between">
          <div class="col">
            <h2 class="text-left">List Tempat Wisata</h2>
          </div>
          <div class="col text-right items-center">
            <a class="btn btn-primary btn-sm text-center" href="/admin/create" type="submit">Tambah Wisata</a>
          </div>
        </div>
        <hr class="">
      </div>
      <div class="row">
        @foreach ($wisatas as $wisata)
        <div class="col-md-6 p-4">
          <div class="box-white row">
            <img src="img/1.jpeg" class="rounded" style="width:200px; height:200px" alt="GambarWisata">
            <div class="p-2 col">
              <h5 class="mt-2">{{ $wisata['namaWisata'] }}</h5>
              <h6 class="mt-2">HTM: Rp. {{ $wisata['hargaWisata'] }}</h6>
              <div class="row m-3 justify-content-between">
                <a class="btn btn-md btn-warning text-white" href="/admin/{{ $wisata->id }}/edit">
                  Edit
                </a>
                <form action="/admin/{{ $wisata->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-md btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</button>
                </form>
                </d>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </main>
</div>
@endsection