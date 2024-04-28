@include('mobileview.appview')
@include('mobileview.stickybar')

<body class="img-fluid position-absolute"
  style="background-image:url({{ asset('/images/background10.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat">
  {{-- navbar --}}
  <nav class="pt-3 navbar fixed-top navbar-expand-lg text-center pb-2" style="background-color: rgb(12, 12, 12)">
    <a href="/barbermenuser"><i class="m-auto fa fa-arrow-left" aria-hidden="true"
        style="font-size: 25px; color: white"></i></a>
    <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px; color: white;">Detail
      Barberman</h6>
  </nav>

  <body style="background-image:url({{ asset('mobile/assets/img/bgdownload.jpg') }})">
    <div class="container mt-8 text-center">
      <div class="row col d-flex justify-content-center text-center my-auto">
        @method('put')
        @csrf
        <img class="card img-thumbnail img-fluid rounded shadow-lg mx-auto d-block" style="max-width: 70%"
          src="{{  asset('storage/images/foto_barberman/'.$barberman->foto)  }}" alt="Card image cap">
        <div class="mt-4">
          <h2 class="mt-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{ $barberman->nama
            }}</h2>
          <h3 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{ $barberman->umur }} Tahun</h3>
          <h6 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{ $barberman->deskripsi }}</h6>
        </div>
      </div>
    </div>
    @include('mobileview.scriptsrc')
  </body>