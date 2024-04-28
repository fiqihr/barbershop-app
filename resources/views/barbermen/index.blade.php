<x-app-layout title="Barberman">

    <body id="page-top">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.navbar')
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Barberman</h1>
                    </div>
                    <div class="d-flex justify-content-end mr-4">
                        <a href="{{ route('barbermen.create') }}" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus mr-2"></i>Tambah Data</a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Umur</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barbermen as $index => $barberman)
                                        <tr>
                                            <td>{{ $index +1 }}</td>
                                            <td> {{ $barberman -> nama }}</td>
                                            <td>
                                                <img src="{{ asset('storage/images/foto_barberman/'.$barberman->foto) }}"
                                                    alt="" style="max-width: 50px;">
                                            </td>
                                            <td> {{ $barberman -> umur}} Tahun </td>
                                            <td> {{ $barberman -> deskripsi}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('barbermen.edit', $barberman->id) }}"
                                                        class="btn btn-warning mr-1"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('barbermen.destroy', $barberman->id)  }}" method="post"
                                                        style="display: inline">
                                                        @csrf
                                                        @method("delete")
                                                        <button class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
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