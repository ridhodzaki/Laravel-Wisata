<nav class="navbar navbar-expand-lg navbar-light web-nav fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-logo " href="#">
      <a class="text-center">PUTRA BONE TREVELTRIP</a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item ">
          <a class="nav-link smooth-scroll" href="/admin">List Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth-scroll" href="/pengaturan">Pengaturan</a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button class="btn border-0 btn-sm " id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto bg-danger border">
                <span class="nav-item nav-link">Keluar</span>
              </div>
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>