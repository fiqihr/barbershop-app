<x-app-layout>

  <body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Transaksi</h1>
          </div>
          <div class="row">
            <div class="card shadow container p-4">
              <form action="/transaksis/{{ $transaksi->id }}" method="post">
                @method('put')
                @csrf
                <label for="position-option">Status Pembayaran</label> <br>
                  <select class="form-control" id="position-option" name="status_pembayaran">
                    <option value="{{ $transaksi->status_pembayaran }}">---</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                  </select>
                  <br>
                <label for="position-option">Status Transaksi</label> <br>
                <select class="form-control" id="position-option" name="status_transaksi">
                  <option value="{{ $transaksi->status_transaksi }}">---</option>
                  <option value="Selesai">Selesai</option>
                  <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                </select>
                <button class="btn btn-primary mt-4 px-5" type="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>

  </body>
</x-app-layout>