<x-layout-user>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-3 fw-bold text-warning text-capitalize">Data Task 1</h1>
    </div>
      <section class="form-pendaftaran bg-white rounded-3 p-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small">
                        <table class="table table-sm text-center fs-5">
                          <thead class="fs-4">
                            <tr class="table table-info">
                              <th scope="col">Info</th>
                              <th scope="col">Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td style="color: black">Nama Lengkap Nasabah</td>
                            <td style="color: black">{{ $loan->nama }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Tipe Pengajuan</td>
                            <td style="color: black">{{ $loan->tipe_pengajuan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Nominal Pengajuan</td>
                            <td style="color: black">Rp {{ number_format($loan->pendapatan_bulanan_nasabah) }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Nominal Pengajuan</td>
                            <td style="color: black">Rp {{ number_format($loan->nominal_pengajuan) }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Tenor</td>
                            <td style="color: black">{{ $loan->tenor }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Tagihan Nasabah</td>
                            <td style="color: black">Rp {{ number_format($loan->tagihan_nasabah) }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Tanggal Pengajuan</td>
                            <td style="color: black">{{ $loan->tanggal_pengajuan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Catatan</td>
                            <td style="color: black">{{ $loan->catatan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black">Status</td>
                            <td style="color: black">{{ $loan->status ? $loan->status : 'Pending' }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/user/loan" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-warning text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-layout-user>