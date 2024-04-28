<x-app-layout title="Pelayanan">

 <body id="page-top">
  <div id="content-wrapper" class="d-flex flex-column">
   <div id="content">
    @include('layouts.navbar')
    <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tabel Pelayanan</h1>
     </div>
     <div class=" d-flex justify-content-end mr-4">
      <a href="{{ route('pelayanans.create') }}" class="btn btn-primary mb-2"><i class="fa fa-plus mr-2"></i>Tambah Data</a>
     </div>
     <div class="card shadow mb-4">
      <div class="card-body">
       <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead class="text-center">
          <tr>
           <th scope="col">No.</th>
           <th scope="col">Pelayanan</th>
           <th scope="col">Gambar</th>
           <th scope="col">Deskripsi</th>
           <th scope="col">Harga</th>
           <th scope="col">Aksi</th>
          </tr>
         </thead>
         <tbody>
          @foreach ($pelayanans as $index => $pelayanan)
          <tr>
           <td>{{ $index +1 }}</td>
           <td> {{ $pelayanan -> jenis }}</td>
           <td>
            <img src="{{ asset('storage/images/foto_pelayanan/'.$pelayanan->foto) }}" alt="" style="max-width: 50px;">
           </td>
           <td>{{ $pelayanan -> deskripsi}}</td>
           <td>Rp. {{ $pelayanan -> harga}}</td>
           <td>
            <div class="d-flex justify-content-around">
             <a href="{{ route('pelayanans.edit', $pelayanan->id) }}" class="btn btn-warning mr-1"><i class="fas fa-edit"></i></a>
             <form action="{{ route('pelayanans.destroy', $pelayanan->id) }}" method="post" style="display: inline">
              @csrf
              @method("delete")
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
             </form>
            </div>
           </td>
          </tr>
          @endforeach
         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
   @include('layouts.footer')
  </div>
 </body>
</x-app-layout>
