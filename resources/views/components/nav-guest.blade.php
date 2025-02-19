<nav class="navbar navbar-expand bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">Ampang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>    
        <a class="nav-link" href="{{ url('/kontak')}}">Kontak Kami</a>
        <a class="nav-link" href="{{ url('/search')}}">Cari Transaksi</a>
      </div>
      <div class="navbar-nav ms-auto gap-3">
        <a href="{{ url('/login')}}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Login</a>
        <a href="{{ url('/register')}}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Register</a>
        
    </div>
  </div>
</nav>