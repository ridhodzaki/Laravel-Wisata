@extends('layouts.blank')

@section('container')
  <main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Register | Putra Bone TravelTrip</h1>

      <div class="form-floating">
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" autofocus required is-invalid>
        <label for="nama">Name</label>
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus required is-invalid>
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required is-invalid>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
  </main>

@endsection