{{-- <div class="container">
  <nav class="navbar custom-nav navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">Go Learn</a>
      <div class="collapse justify-content-end navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<div class="container my-5">
  <nav class="navbar custom-nav navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BERSUARA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse justify-content-end navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
              Welcome {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item mr-2" href="/dashboard"><i class="bi bi-speedometer"></i>My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</li></button>
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link btn btn-primary"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
</div> --}}

<div class="container my-5">
  <nav class="navbar custom-nav navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">B-TECH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse justify-content-end navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/blog') ? 'active' : ''}}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/categories') ? 'active' : ''}}" href="#categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/about') ? 'active' : ''}}" href="#about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>