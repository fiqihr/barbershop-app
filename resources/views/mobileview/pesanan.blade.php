@include('mobileview.appview')
@include('mobileview.stickybar')

<body>
    <nav class="pt-4 navbar fixed-top navbar-expand-lg bg-white text-center pb-4">
        <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px">Pesanan Anda</h6>
    </nav>
    <div class="container mt-7 mb-9 mx-auto">
        {{-- @if ($daftarTransaksi->status_transaksi === 'Menunggu Pembayaran')
        <button class=" btn btn-warning">Menunggu</button>
    @elseif ($daftarTransaksi->status_transaksi === 'Selesai')
        <button class=" btn btn-success">Selesai</button>
    @endif --}}
        @if(session()->has('batal'))
        <div class="alert alert-danger" style="color: white;" role="alert">
            {{ session()->get('batal') }}
            <br>
        </div>
        @endif
        {{-- @method('put')
        @csrf --}}
        @if(isset($transaksi))
        @foreach ($transaksi as $daftarTransaksi )
        <div class="col">
            <div class="card-horizontal bg-white mb-3 shadow rounded">
                <div class="card-header bg-light pt-2 px-2 rounded d-flex" style="">
                    {{ $daftarTransaksi->tanggal ?? 'None' }} | {{ $daftarTransaksi->jam ?? 'None' }}

                    @if ($daftarTransaksi->status_transaksi === 'Menunggu Pembayaran')
                    <form action="/pesanan/{{ $daftarTransaksi->id }}" method="post" class="d-inline ms-auto">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger px-2 py-1" type="submit" style="font-size:10px;">batal</button>
                    </form>
                    @else
                    <form></form>
                    @endif

                </div>
                <div class="card-body py-2 px-2 d-flex justify-content-between ">
                    <div class="card-group">
                        <h5 class="card-title">{{ $daftarTransaksi->pelayanan->jenis ?? 'None' }}</h5>
                        <p class="card-text">Barberman: {{ $daftarTransaksi->barberman->nama ?? 'None' }}</p>
                    </div>
                    <form>
                            @if ($daftarTransaksi->status_transaksi === 'Menunggu Pembayaran')
                                <button class=" btn btn-warning">Menunggu</button>
                            @elseif ($daftarTransaksi->status_transaksi === 'Selesai')
                                <button class=" btn btn-success">Selesai</button>
                            @endif
                        {{-- <button class="btn btn-warning" type="submit">Batal</button> --}}
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif



    </div>
    @include('mobileview.scriptsrc')
</body>