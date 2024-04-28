<x-app-layout>

  <body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Barberman</h1>
          </div>
          <div class="row">
            <div class="card shadow container p-4 w-75">
            <form action="{{ route('barbermen.update', $barberman->id) }}" method="post" enctype="multipart/form-data">
              @method('put')
              @csrf
              <label for="position-option">Nama Barberman</label>
              <input class="mb-3 form-control" value="{{ $barberman->nama }}" type="text" name="nama" placeholder="edit nama">
              <label for="position-option">Umur</label>
              <input class="mb-3 form-control" value="{{ $barberman->umur }}" type="text" name="umur" placeholder="edit umur">
              <label for="position-option">Deskripsi</label>
              <input class="mb-3 form-control" value="{{ $barberman->deskripsi }}" type="text" name="deskripsi" placeholder="edit deskripsi">
              <label for="position-option">Foto Barberman</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}"
                  name="foto" placeholder="tambahkan foto">
                @error('foto')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror <br>
              <br>
              <button class="btn btn-dark" type="submit">Update</button>
            </form>
          </div>
        </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>

  </body>
</x-app-layout>