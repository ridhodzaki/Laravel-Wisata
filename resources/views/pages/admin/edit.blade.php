@extends('layouts.guest')
<!-- @dd($wisata->namaWisata) -->
@section('container')
<!-- Navbar -->
@include('components.navbaradmin')
<!-- Akhir Navbar -->

<!-- Tambah Produk -->
<div class="container mt-4">
  <div class="row justify-content-between">
    <div class="col">
      <h5 class="textPrimary">Tambah Wisata</h5>
      <hr>
    </div>
  </div>
  <form method="post" action="/admin/{{ $wisata->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="gambarWisata" class="form-label">Gambar Wisata</label>
      <input class="form-control" type="file" id="gambarWisata" name="gambarWisata">
    </div>
    <div class="mb-3">
      <label for="namaWisata" class="form-label">Nama Wisata</label>
      <input type="text" required name="namaWisata" class="form-control" value="{{ $wisata->namaWisata }}" id="namaWisata">
    </div>
    <div class="mb-3">
      <label for="hargaWisata" class="form-label">Harga Wisata</label>
      <input type="numeric" required name="hargaWisata" class="form-control" id="hargaWisata" value="{{ $wisata->hargaWisata }}" placeholder="90000">
    </div>
    <div class="mb-3">
      <label for="deskripsiWisata" class="form-label">Deskripsi Wisata</label>
      <textarea type="text" required name="deskripsiWisata" rows="3" class="form-control" id="deskripsiWisata" placeholder="Deskripsi Wisata">{{ $wisata->deskripsiWisata }}</textarea>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Tambah Wisata</button>
    </div>
  </form>
</div>
@endsection