<x-layout-user>
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('update'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      {{ session('update') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-3 fw-bold text-warning text-capitalize">Data Pengajuan Pinjaman</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
      <div class="row">
        <div class="col-md-8 col-12">
          <a href="/user/loan/create" class="btn btn-warning mb-3 fw-bold">Tambah Pinjaman</a>
        </div>
      </div>

      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-warning text-black fw-bold text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Nasabah</th>
                <th scope="col">Tipe Pengajuan</th>
                <th scope="col">Pendapatan Nasabah</th>
                <th scope="col">Nominal Pengajuan</th>
                <th scope="col">Tenor</th>
                <th scope="col">Tagihan Nasabah Perbulan</th>
                <th scope="col">Tanggal Pengajuan</th>
                <th scope="col">Catatan</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($loans as $loan)
              <tr class="text-center text-black fw-bold">
                  <td>{{ $loop->iteration }}</td>
                  <td style="color: black;">{{$loan->nama}}</td>
                  <td style="color: black;">{{ $loan->tipe_pengajuan }}</td>
                  <td style="color: black;">Rp {{ number_format($loan->pendapatan_bulanan_nasabah) }}</td>
                  <td style="color: black;">Rp {{ number_format($loan->nominal_pengajuan) }}</td>
                  <td style="color: black;">{{ $loan->tenor }}</td>
                  <td style="color: black;">Rp {{ number_format($loan->tagihan_nasabah) }}</td>
                  <td style="color: black;">{{ $loan->tanggal_pengajuan }}</td>
                  <td style="color: black;">{{ $loan->catatan }}</td>
                  <td style="color: black; font-weight: bold;">{{ $loan->status}}</td>
                  <td class="d-flex">

                    <a href="/user/loan/{{ $loan->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                    
                    @can('admin')
                    <form method="POST" action="{{ route('loan/approve', $loan->id) }}">
                      @csrf
                      @method('PATCH')
                      <button style="margin-left: 5px" class="btn btn-success px-3 fw-bold border-0" onclick="return confirm('Apakah kamu yakin mau approve data ini?')">Approve</button>
                    </form>

                    <form method="POST" action="{{ route('loan/reject', $loan->id) }}">
                      @csrf
                      @method('PATCH')
                      <button style="margin-left: 5px" class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apakah kamu yakin mau reject data ini?')">Reject</button>
                    </form>
                    @endcan

                    <a href="/user/loan/{{ $loan->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                    
                    <form method="post" action="/user/loan/{{ $loan->id }}">
                      @csrf
                      @method('delete')
                      <button class="btn btn-light px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
</x-layout-user>