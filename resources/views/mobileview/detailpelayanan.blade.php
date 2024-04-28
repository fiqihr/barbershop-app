@include('mobileview.appview')
@include('mobileview.stickybar')

<body class="bg-gradient-light" >
{{-- navbar --}}
<nav class="pt-3 navbar fixed-top navbar-expand-lg bg-white text-center pb-2">
 <a href="/pelayananuser"><i class="m-auto fa fa-arrow-left" aria-hidden="true" style="font-size: 25px"></i></a>
 <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px">Detail Sevices</h6>
</nav>

<body style="background-image:url({{ asset('images/background10.png') }})">
 @method('put')
 @csrf
 <div class="card mt-7" style="width: auto;">
  <img class="card-img-top" src="{{ asset('storage/images/foto_pelayanan/'.$pelayanan->foto) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{ $pelayanan->jenis }}</h5>
    <p class="card-text" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{ $pelayanan->deskripsi }}</p>
  </div>
  <ul class="list-group list-group-flush" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
    <li class="list-group-item ms-auto">Rp. {{ $pelayanan->harga }}</li>
  </ul>
</div>

 {{-- <div class="container mt-8 text-center">
<div class="row col d-flex justify-content-center text-center my-auto">
   @method('put')
   @csrf --}}
   {{-- <img class="card img-thumbnail img-fluid rounded shadow-lg mx-auto d-block" style="max-width: 70%" src="{{  asset('storage/images/foto_barberman/'.$barberman->foto)  }}" alt="Card image cap"> --}}
   {{-- <h2 class="mt-3">{{ $pelayanan->jenis }}</h2>
   <h3>Rp. {{ $pelayanan->harga }}</h3> --}}
   {{-- <h6>{{ $barberman->deskripsi }}</h6> --}}
 {{-- </div>
</div> --}}
 @include('mobileview.scriptsrc')
</body>