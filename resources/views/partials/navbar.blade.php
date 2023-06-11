<nav class="navbar navbar-expand-lg text-light text-white" style="background-color:#22b69b" >
    <div class="container text-white">
      <a class="navbar-brand fw-bold text-white" href="/">Sibook</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="text-white navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'post' ? 'active fw-semibold' : '' }}" href="/home">Home</a>
          </li>
        </ul>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="text-white navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'post' ? 'active fw-semibold' : '' }}" href="/blog">Posts</a>
          </li>
        </ul>
        @auth
          <ul class="text-white navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white {{ $active === 'post' ? 'active fw-semibold' : '' }}" href="/dashboard/posts">Unggah</a>
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
              <a class="nav-link text-white px-3{{ $active === 'login' ? 'active fw-semibold' : '' }}" aria-current="page" href="/login">Login</a>
            </li>
          </ul>
        @endauth
      </div>
    </div>
  </nav>
