<div class="container-xl">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-light">
      <div class="container-fluid con-nav">
          <a class="navbar-brand" href="/">
              <img src="{{asset('img/logo.png')}}" alt="" width="20" height="20"
                  class="d-inline-block align-text-top">
              Kanggotan.id
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav mr-1 mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Gallery</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Profile
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Organization Structure</a></li>
                          <li><a class="dropdown-item" href="#">... </a></li>
                          <li><a class="dropdown-item" href="#">...</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Haul Massal
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{route('nyadran2022')}}">2022</a></li>
                          <li><a class="dropdown-item" href="#">2021</a></li>
                          <li><a class="dropdown-item" href="#">2020</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                  </li>
              </ul>
              <form class="d-flex">
                  <a href="/login" id="login-link" type="button" class="btn mx-2 btn-sm btn-outline-primary">Login</a>
                  <button id="logout-link" type="button" class="btn mx-2 btn-sm btn-outline-danger d-none">Log
                      out</button>
              </form>
          </div>
      </div>
  </nav>
</div>