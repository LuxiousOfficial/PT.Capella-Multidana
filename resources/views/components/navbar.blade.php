<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning fs-4 sticky-top" style="font-family: calibri">
    <div class="container-fluid">
      <div class="search">
        <form action="/search" method="GET" class="d-flex mt-2" role="search">
          <input class="form-control me-2" type="search" id="search" name="search" placeholder="Cari sesuatu di sini..." aria-label="Search" autocomplete="off" style="width: 20rem">
          <button class="btn btn-outline-white bg-white fw-bold text-warning fs-5 border-3" type="submit">Search</button>
        </form>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
        <ul class="navbar-nav text-capitalize ms-auto mx-1" style="font-weight: bold;">
          <li class="nav-item">
            <x-nav-links href="/" :active="request()->is('/')">Home</x-nav-links>
          </li>
          <li class="nav-item">
            <x-nav-links href="/products" :active="request()->is('products')">Our About</x-nav-links>
          </li>
          <li class="nav-item">
            <x-nav-links href="/dealer" :active="request()->is('dealer')">Services</x-nav-links>
          </li>
          <li class="nav-item">
            <x-nav-links href="/dealer" :active="request()->is('dealer')">Contact</x-nav-links>
          </li>
          <li class="nav-item">
            <x-nav-links href="/user/loan" :active="request()->is('/user/loan')">Dashboard</x-nav-links>
          </li>
          @auth
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link">Logout</button>
            </form>
          </li>
          @else
          
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigasi -->  