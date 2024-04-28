<x-app-layout title="Pelanggan">

    <body id="page-top">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.navbar')
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel User</h1>
                    </div>
                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }} <br>
                    </div>
                    @endif
                    <div class="d-flex justify-content-end mr-4">
                        <a href="{{ route('users.create') }}" class="btn btn-primary" style="margin-bottom: 15px"><i class="fa fa-plus mr-2"></i> Tambah Data</a>
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
                                            <th scope="col">Email</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $index => $user)
                                        <tr>
                                            <td>{{ $index +1 }}</td>
                                            <td> {{ $user -> name }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/images/foto_user/'.$user->foto) }}"
                                                    alt="" style="max-width: 50px;"> <br>
                                            </td>
                                            <td> {{ $user -> email }}</td>
                                            <td> {{ $user -> telepon }}</td>
                                            <td> {{ $user -> alamat }}</td>
                                            <td> {{ $user -> jenis_kelamin }}</td>
                                            <td> {{ $user -> role }}</td>
                                            <td>
                                                {{-- <a href="" class="btn btn-primary"><i
                                                        class="fa fa-exclamation-circle"></i></a> --}}
                                                <div class="d-flex justify-content-around">
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-warning mr-1"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="post"
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