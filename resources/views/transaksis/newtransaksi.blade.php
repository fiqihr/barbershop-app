<x-app-layout>

  <body id="page-top">

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
          </div>
          <div class="row">
            <div class="card shadow container p-4 w-75">
            <form action="/transaksis" method="post">
              @csrf
              <div class="form-group">
                <label for="position-option">Nama Pelanggan</label>
                <select class="form-control" id="position-option" name="user_id">
                  <option selected>---</option>
                  @foreach ($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="position-option">Jenis Pelayanan</label>
                <select class="form-control" id="position-option" name="pelayanan_id">
                  <option selected>---</option>
                  @foreach ($pelayanans as $pelayanan)
                  <option value="{{ $pelayanan->id }}">{{ $pelayanan->jenis }}</option>
                  @endforeach
                </select>
              </div>
              <label for="position-option">Tanggal</label>
              <input type="date" class="mb-3 form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" name="tanggal" placeholder="tanggal">
              <label for="position-option">Jam Layanan</label>
              <input type="time" class="mb-3 form-control @error('time') is-invalid @enderror" value="{{ old('time') }}" name="jam" placeholder="jam">
              <div class="form-group">
                <label for="position-option">Barberman</label>
                <select class="form-control" id="position-option" name="barberman_id">
                  <option selected>---</option>
                  @foreach ($barbermen as $barberman)
                  <option value="{{ $barberman->id }}">{{ $barberman->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
              <label for="position-option">Status Pembayaran</label>
              <select class="form-control" name="status_pembayaran" aria-label="Default select example">
                <option selected>---</option>
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
              </select>
            </div>
            <div class="form-group">
              <label for="position-option">Status Transaksi</label>
              <select class="form-control" name="status_transaksi" aria-label="Default select example">
                <option selected>---</option>
                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                <option value="Selesai">Selesai</option>
              </select>
            </div>

              {{-- <input type="hidden" name="total_pembayaran" value="{{ $pelayanan->harga }}"> --}}
              <br>
              {{-- <input type="text" name="status_pembayaran" placeholder="status"><br> --}}
              {{-- <input type="text" name="total_pembayaran" placeholder="total"><br> --}}
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2 px-5" type="submit">Tambah</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </body>
</x-app-layout>