<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/blog">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="file-text" class="align-text-bottom"></span>
          My Posts
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/bookmarks') ? 'active' : '' }}" href="/dashboard/bookmarks">
          <span data-feather="bookmark" class="align-text-bottom"></span>
          My Bookmark
        </a>
      </li> --}}
      @can('admin')
      <hr>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }}" href="/dashboard/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          Category
        </a>
      </li>
      @endcan
    </ul>
  </div>
</nav>
