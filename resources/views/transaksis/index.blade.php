<x-app-layout title="Transaksi">

  <body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Transaksi</h1>
          </div>
          <div class=" d-flex justify-content-end mr-4">
            <a href="/transaksis/newtransaksi" class="btn btn-primary" style="margin-bottom: 15px"><i
                class="fa fa-plus mr-2"></i>Tambah Data</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Pelayanan</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jam</th>
                      <th scope="col">Barberman</th>
                      <th scope="col">Status</th>
                      <th scope="col">Status Transaksi</th>
                      <th scope="col">Total</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transaksis as $index => $transaksi)
                    <tr>
                      <td>{{ $index +1 }}</td>
                      <td> {{ $transaksi ->pelayanan->jenis ?? 'None' }}</td>
                      <td> {{ $transaksi ->user->name ?? 'None' }}</td>
                      <td> {{ $transaksi ->tanggal }}</td>
                      <td> {{ $transaksi ->jam }} WIB</td>
                      <td> {{ $transaksi ->barberman->nama ?? 'None' }}</td>
                      <td> {{ $transaksi ->status_pembayaran ?? 'None' }}</td>
                      <td> {{ $transaksi ->status_transaksi ?? 'None' }}</td>
                      <td> Rp. {{ $transaksi ->total_pembayaran ?? 'None' }}</td>
                      <td>
                        <a href="/transaksis/{{ $transaksi->id }}/edit" class="btn btn-warning"><i
                            class="fas fa-edit"></i></a>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="card mt-3 px-3">
                  <h4 class="mt-3">Laporan Transaksi</h4>
                  <form action="{{ route('laporan') }}" method="post" target="_blank">
                    @csrf
                    <div class="d-flex justify-content-center mt-2">
                      <input type="date" class="mb-3 form-control" name="tanggalawal" id="tanggalawal" placeholder="tambahkan harga">
                      <p class="mx-4">sampai</p>
                        <input type="date" class="mb-3 form-control" name="tanggalakhir" id="tanggalakhir" placeholder="tambahkan harga">
                    </div>
                    <div class=" d-flex justify-content-end mr-4">
                      <button class="btn btn-primary" style="margin-bottom: 15px"><i
                          class="fa fa-print mr-2"></i>Cetak Laporan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </body>
</x-app-layout>