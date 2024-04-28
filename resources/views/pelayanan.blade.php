<x-app-layout title="Pelayanan">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.navbar')
            <div class="container-fluid">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Pelayanan</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelayanans as $pelayanan)
                                    <tr>
                                        <td> {{ $no++ }}</td>
                                        <td>{{ $pelayanan->jenis }}</td>
                                        <td>{{ $pelayanan->harga }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i></button>
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
    </div>
</x-app-layout>