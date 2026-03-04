<link rel="stylesheet" href="/css/registrasi.css">
<title>PT. Astra Honda Motor || Reset Password</title>
<x-form>
    <section class="form-registrasi">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5 col-lg-6 col-md-9 col-10">
              <img src="/img/logo honda.svg" class="img-fluid" alt="Sample image" style="width: 28rem;">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="/reset-password" method="post">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <h2 class="text-capitalize text-danger mb-3 astra">PT. astra honda motor</h2>
                </div>
      
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label fw-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email') }}"/>
                  @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <!-- End Email input -->
                
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                  <label class="form-label fw-bold" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg @error('password')is-invalid @enderror" placeholder="Ketik password anda..." required/>
                  @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <!-- End Password input -->

                <!-- Password Konfirmasi -->
                <div data-mdb-input-init class="form-outline mb-3">
                  <label class="form-label fw-bold" for="password">Konfirmasi Password</label>
                  <input type="password" id="repassword" name="password_confirmation" class="form-control form-control-lg @error('password')is-invalid @enderror" placeholder="Ketik Ulang password anda..." required/>
                  @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <!-- End Password Konfirmasi -->

                <div data-mdb-input-init class="form-outline mb-3">
                  <input type="hidden" value="{{ $token }}" id="token" name="token" class="form-control form-control-lg"/>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button  type="submit" name="reset" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Reset Password</button>
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