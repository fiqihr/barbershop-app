<x-app-layout>

  <body id="page-top">

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Jenis Layanan</h1>
          </div>
          <div class="row">
            <div class="card shadow container p-4 w-75">
              <form action="{{ route('pelayanans.update', $pelayanan->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="position-option">Jenis Pelayanan</label>
                <input class="mb-3 form-control" value="{{ $pelayanan->jenis }}" type="text" name="jenis"
                  placeholder="editnama">
                <label for="position-option">Harga</label>
                <input class="mb-3 form-control" value="{{ $pelayanan->harga }}" type="text" name="harga"
                  placeholder="editharga">
                <label for="position-option">Deskripsi</label>
                <input class="mb-3 form-control" value="{{ $pelayanan->deskripsi }}" type="text" name="deskripsi"
                  placeholder="edit deskripsi">

                <label for="position-option">Gambar</label>
                <input type="file" class="form-control " value="{{  $pelayanan->foto }}" name="foto"
                  placeholder="tambahkan gambar"> <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary me-md-2 px-5" type="submit">Update</button>
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