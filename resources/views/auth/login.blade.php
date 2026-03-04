<link rel="stylesheet" href="css/login.css">
<title>PT. Capella Multidana || Login</title>
<x-form>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('Failed'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
      {{ session('Failed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <section class="form-login">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-5 col-lg-6 col-md-9 col-10">
            <img src="img/capella.png" class="img-fluid" alt="Sample image" style="width: 28rem;">
          </div>
          <div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-1">
            <form action="/" method="post">
              @csrf
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <h2 class="text-capitalize text-warning mb-3 astra">PT. Capella Multidana</h2>
              </div>
    
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label fw-bold" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Ketik alamat email anda..." autofocus required value="{{ old('email') }}"/>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
              <!-- End Email input -->
              
              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-3">
                <label class="form-label fw-bold" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Ketik password anda..." required/>
              </div>
              <!-- End Password input -->
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button  type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Login</button>
              </div>
              <div class="col-xxl-12 col-xl-12 col-md-12 col-12 d-flex justify-content-between align-items-center fs-5">
                <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize">Don't Have Account? <br>
                  <a href="/registration" class="link-warning">Register Now</a>
                </p>
                <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize"><br>
                  <a href="#" class="link-warning">Forgot Password?</a>
                </p>
              </div>
              @if(session('status'))
              <div class="alert alert-success col-md-12 mt-3" style="max-width: 400px">
                  {{ session('status') }}
              </div>
              @endif
            </form>
          </div>
        </div>
      </div>
      <div
        class="text-center justify-content-center py-2 px-2 px-xl-5 bg-warning">
        <!-- Copyright -->
        <div class="text-white text-capitalize fw-bold fs-6">
         <p> &copy; Copyright 2026 PT. Capella Multidana All rights reserved <br> by rommy ardiansyah</p>
        </div>
        <!-- Copyright -->
      </div>
    </section>
</x-form>