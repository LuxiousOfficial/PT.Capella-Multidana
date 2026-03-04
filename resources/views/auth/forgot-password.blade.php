<link rel="stylesheet" href="css/registrasi.css">
<title>PT. Astra Honda Motor || Forgot Password</title>
<x-form>
    <section class="form-login">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5 col-lg-6 col-md-9 col-10">
              <img src="img/logo honda.svg" class="img-fluid" alt="Sample image" style="width: 28rem;">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-1">
              <form action="/forgot-password" method="post">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <h2 class="text-capitalize text-danger mb-3 astra">PT. astra honda motor</h2>
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
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button  type="submit" name="forgot" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Send Email</button>
                </div>
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12 d-flex justify-content-between align-items-center fs-5">
                    <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize">belum punya akun? <br>
                      <a href="/registrasi" class="link-danger">Registrasi sekarang</a>
                    </p>
                    <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize"><br>
                    <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize">sudah punya akun? <br>
                      <a href="/login" class="link-danger">Login Sekarang</a>
                    </p>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger col-md-12 mt-3" style="max-width: 400px">
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
          class="text-center justify-content-center py-2 px-2 px-xl-5 bg-danger">
          <!-- Copyright -->
          <div class="text-white text-capitalize fw-bold fs-6">
           <p> &copy; Copyright 2026 PT. astra honda motor All rights reserved <br> by rommy ardiansyah</p>
          </div>
          <!-- Copyright -->
        </div>
      </section>
</x-form>