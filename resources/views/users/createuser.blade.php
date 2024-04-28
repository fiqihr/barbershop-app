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
              <form action="{{ route('users.index') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="position-option">Nama</label>
                <input type="text" class=" mb-3 form-control @error('name') is-invalid @enderror"
                  value="{{ old('name') }}" name="name" placeholder="masukkan nama">
                @error('name')
                <span class="invalid-feedback">
                  {{ $message }} </span>
                @enderror
                <label for="position-option">Email</label>
                <input class="form-control mb-3" type="email" name="email" placeholder="masukkan email">
                <label for="position-option">Password</label>
                <input class="form-control mb-3" type="password" name="password" placeholder="masukkan password">
                <label for="position-option">Telepon</label>
                <input class="form-control mb-3" type="text" name="telepon" placeholder="masukkan nomor telepon">
                <label for="position-option">Alamat</label>
                <input class="form-control mb-3" type="text" name="alamat" placeholder="masukkan alamat ">
                <label for="position-option">Jenis Kelamin</label>
                <select class="form-select form-control mb-3" name="jenis_kelamin" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <label for="position-option">Role</label>
                <select class="form-select form-control mb-3" name="role" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
                <input type="hidden" value="default.jpg" name="foto">
                {{-- <label for="position-option">Foto Profil</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}"
                  name="foto" placeholder="tambahkan foto">
                @error('foto')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror <br> --}}
                <br>
                {{-- <input type="text" name="role" placeholder="Role"><br> --}}
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