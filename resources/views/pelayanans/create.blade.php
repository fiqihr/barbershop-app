<x-app-layout>

 <body id="page-top">
  <div id="content-wrapper" class="d-flex flex-column">
   <div id="content">
    @include('layouts.navbar')
    <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Layanan</h1>
     </div>
     <div class="row">
      <div class="card shadow container p-4 w-75">
       <form action="{{ route('pelayanans.index') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="position-option">Jenis Pelayanan</label>
        <input type="text" class="mb-3 form-control @error('jenis') is-invalid @enderror " value="{{ old('jenis') }}" name="jenis" placeholder="tambahkan jenis pelayanan">
        @error('jenis')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <label for="position-option">Harga</label>
        <input type="text" class="mb-3 form-control @error('harga') is-invalid @enderror " value="{{ old('harga') }}" name="harga" placeholder="tambahkan harga">
        @error('harga')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <label for="position-option">Deskripsi</label>
        <input type="text" class="mb-3 form-control @error('deskripsi') is-invalid @enderror " value="{{ old('deskripsi') }}" name="deskripsi" placeholder="tambahkan deskripsi">
        @error('deskripsi')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        <label for="position-option">Gambar</label>
        <input type="file" class="form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}" name="foto" placeholder="tambahkan gambar">
        @error('foto')
        <span class="invalid-feedback">
         {{ $message }}</span>
        @enderror <br>
        {{-- <input type="text" name="harga" placeholder="harga nya juga"><br> --}}
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
