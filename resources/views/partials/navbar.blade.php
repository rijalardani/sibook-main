<nav class="navbar navbar-expand-lg text-light text-white" style="background-color:#22b69b"justify-center>
    <div class="container text-white">
      <a class="navbar-brand fw-bold text-white" href="/">
        <img src="/img/logo sibook with text white.png" alt="" width="102" height="36">
      </a>  
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="text-white navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="/home">Home</a>
          </li>
        </ul>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="text-white navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="/blog">Posts</a>
          </li>
        </ul>
        @auth
          <ul class="text-white navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard/posts">Unggah</a>
            </li>
          </ul>
          <ul class="text-white navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/dashboard/bookmarks">Koleksi</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard">My Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          @else
          <ul class="text-white navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
            </li>
          </ul>
        @endauth
      </div>
    </div>
  </nav>
  
  <style>
    .navbar {
      transition: all 0.3s ease;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .navbar-scroll {
      background-color: #22b69b;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-link:hover {
      background-color: #22b69b;
      transform: translateY(-5px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-toggler-icon {
      color: #fff;
    }
  </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Fungsi untuk mengubah class navbar saat discroll
  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('navbar-scroll', window.scrollY > 0);
  });
</script>
  