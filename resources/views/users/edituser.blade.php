<x-app-layout>

  <body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
          </div>
          <div class="row">
            <div class="card shadow container p-4 w-75">
              <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="position-option">Nama</label>
                <input class="mb-3 form-control" value="{{ $user->name }}" type="text" name="name"
                  placeholder="editname">
                <label for="position-option">Email</label>
                <input class="mb-3 form-control" value="{{ $user->email }}" type="text" name="email"
                  placeholder="editemail">
                <label for="position-option">No. Telepon</label>
                <input class="mb-3 form-control" value="{{ $user->telepon }}" type="text" name="telepon"
                  placeholder="edittelepon">
                <label for="position-option">Alamat</label>
                <input class="mb-3 form-control" value="{{ $user->alamat }}" type="text" name="alamat"
                  placeholder="editalamat">
                <label for="position-option">Jenis Kelamin</label>
                <input class="mb-3 form-control" value="{{ $user->jenis_kelamin }}" type="text" name="jenis_kelamin"
                  placeholder="editjenis_kelamin">
                <label for="position-option">Role</label>
                <input class="mb-3 form-control" value="{{ $user->role }}" type="text" name="role"
                  placeholder="editrole">
                <label for="position-option">Foto Profil</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}"
                  name="foto" placeholder="tambahkan foto">
                @error('foto')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror <br>
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