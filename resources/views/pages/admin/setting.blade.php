@extends('layouts.guest')
@section('container')
<!-- @dd($pengaturan->deskirpsiDesa) -->
<!-- Navbar -->
@include('components.navbaradmin')
<!-- Akhir Navbar -->
<div class="mt-5">
  <div class="container-fluid" style="margin-top: 80px">
    <div class="row justify-content-between">
      <div class="col">
        <h2 class="text-left">Pengaturan Website</h2>
      </div>
    </div>
    <hr class="">
  </div>
  <div class="container">
    <form action="">
      <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori</label>
        <textarea type="tel" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" required>{{ $pengaturan->deskirpsiDesa }}</textarea>
      </div>
    </form>
  </div>
</div>
@endsection