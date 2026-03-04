<title>PT. Astra Honda Motor || Penerimaan Calon Karyawan</title>
<link rel="stylesheet" href="/css/karyawan.css">

<x-layout>
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <section class="container mt-3">
        <div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form method="POST" action="/user/loan">
                      @csrf

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="nama">Nama Lengkap Nasabah</label>
                        <input type="text" id="nama" name="nama" autofocus="true" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('nama') }}"/>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tipe_pengajuan">Tipe Pengajuan</label>
                        <select class="form-select" aria-label="Default select example" id="tipe_pengajuan" name="tipe_pengajuan">
                          <option selected>Silahkan Pilih</option>
                          <option value="Sepeda Motor">Sepeda Motor</option>
                          <option value="Mobil">Mobil</option>
                          <option value="Multiguna">Multiguna</option>
                        </select>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="pendapatan_bulanan_nasabah">Pendapatan Bulanan Nasabah</label>
                        <input type="number" id="pendapatan_bulanan_nasabah" name="pendapatan_bulanan_nasabah" class="form-control form-control-lg @error('pendapatan_bulanan_nasabah')is-invalid @enderror" placeholder="Ketik pendapatan bulanan nasabah anda..." required value="{{ old('pendapatan_bulanan_nasabah') }}"/>
                        @error('pendapatan_bulanan_nasabah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="nominal_pengajuan">Nominal Pengajuan</label>
                        <input type="number" id="nominal_pengajuan" name="nominal_pengajuan" class="form-control form-control-lg @error('nominal_pengajuan')is-invalid @enderror" placeholder="Ketik nominal pengajuan anda..." required value="{{ old('nominal_pengajuan') }}"/>
                        @error('nominal_pengajuan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tenor">Tenor</label>
                        <input type="number" min="1" max="24" id="tenor" name="tenor" class="form-control form-control-lg @error('tenor')is-invalid @enderror" placeholder="Ketik tenor anda..." required value="{{ old('tenor') }}"/>
                        @error('tenor')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      {{-- <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tagihan_nasabah">Tagihan Nasabah Perbulan</label>
                        <input class="form-control" type="text" value="{{ old('tagihan_nasabah') }}" aria-label="Disabled input example" disabled readonly>
                        @error('tagihan_nasabah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div> --}}

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tanggal_pengajuan">Tanggal Pengajuan</label>
                        <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" class="form-control form-control-lg w-50 @error('tanggal_pengajuan')is-invalid @enderror" placeholder="Ketik tanggal pengajuan anda..." required value="{{ old('tanggal_pengajuan') }}"/>
                        @error('tanggal_pengajuan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="form-label fw-bold" for="catatan">Catatan</label>
                        <textarea class="form-control @error('catatan')is-invalid @enderror" id="catatan" name="catatan" rows="3" value="{{ old('catatan') }}"></textarea>
                        @error('catatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                          
                      <div class="text-center text-lg-start mt-4 pt-2">
                        <button  type="submit" name="simpan" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Simpan</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>