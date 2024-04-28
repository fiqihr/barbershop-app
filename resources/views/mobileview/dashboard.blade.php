@include('mobileview.appview')
@include('mobileview.stickybar')

{{--

<body class="bg-white"> --}}

  <body class="img-fluid position-absolute"
    style="background-image:url({{ asset('/images/background09.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat;">
    {{-- navbar --}}
    <nav class="pt-4 navbar fixed-top navbar-expand-lg text-center pb-4" style="background-color: black">
      {{-- <a href="/dashboard"><i class="m-auto fa fa-arrow-left" aria-hidden="true" style="font-size: 25px"></i></a>
      --}}
      <h6 class="m-auto col position-absolute start-50 translate-middle-x "
        style="font-size: 16px; color: rgb(255, 229, 30)">
        Barbershop</h6>
    </nav>
    {{-- end navbar --}}

    <div class="container mt-7 mb-4 mx-auto">

      @if(session()->has('success'))
      <div class="alert alert-light alert-dismissible fade show d-flex justify-content-beetwen py-1 px-2"
        style="border-radius:15px; color: black;" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn btn-gradient-light close py-0 ps-3 pe-3 ms-2" data-dismiss="alert"
          aria-label="Close">
          {{-- <span aria-hidden="true">&times;</span> --}}
          x
        </button>
        <br>
      </div>
      @elseif(session()->has('successlogin'))
      <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-around pb-1" role="alert"
        style="border-radius: 15px;">
        {{ session()->get('successlogin') }}
        <button type="button" class="btn btn-light close py-1 px-2 ms-4" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('successlogin') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      @endif

      {{-- <h3 style="color: black">Welcome, {{ Auth::user()->name }}</h3> --}}
      {{-- <div class="card bg-dark mx-auto"> --}}
        <h6 style="color: white; font-size:40px">Great Gentleman Style!</h6>
        <p style="color: white; font-size:20px">Let your hair do the talking</p>

        <br>
        {{-- <div id="preloader" class="spinner-grow" style="position: fixed;
      width: 100%;
      height: 100%;
      z-index: 999;
      background: url('preloader.gif') 50% no-repeat #fff;">
        </div> --}}
        {{-- <div id="carouselExampleControls" class="carousel slide rounded mt-2" data-ride="carousel" style="
    object-fit: cover;
    object-position: center;
    overflow: hidden;
      ">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('mobile/assets/img/banner1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('mobile/assets/img/banner2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('mobile/assets/img/banner3.png') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> --}}
        {{--
      </div> --}}
      <div class="card shadow container p-4 w-100 py-1 mt-9 bg-gradient-light d-flex">
        {{-- <div class="container mt-5 mb-4"> --}}
          <div class="row pb-4 ">
            <a href="pemesanan/tambahSebelumJam" class="col d-flex justify-content-center my-2 " style="height: 75px">
              <div class="card text-center px-auto bg-gradient-white" style="width: 75px;">
                <img class="rounded p-2" src="{{ asset('mobile/assets/img/barbershop1.png') }}" alt="Card image cap">
                <p style="font-size: 12px; font-weight: bold;">Booking</p>
              </div>
            </a>
            {{-- <div class="w-100"></div> --}}
            <a href="barbermenuser" class="col d-flex justify-content-center my-2" style="height: 75px">
              <div class="card text-center px-auto bg-gradient-white" style="width: 75px;">
                <img class="rounded p-2" src="{{ asset('mobile/assets/img/hairdresser.png') }}" alt="Card image cap">
                {{-- <h5 class="text-center" style="width: 100px">abc</h5> --}}
                <p style="font-size: 12px; font-weight: bold">Barberman</p>
              </div>
            </a>
            <a href="/pelayananuser" class="col d-flex justify-content-center my-2" style="height: 75px">
              <div class="card text-center px-auto bg-gradient-white" style="width: 75px;">
                <img class="rounded p-2" src="{{ asset('mobile/assets/img/barber-chair.png') }}" alt="Card image cap">
                <p style="font-size: 12px; font-weight: bold">Services</p>
                {{-- <h5 class="text-center" style="width: 100px">abc</h5> --}}
              </div>
            </a>
          </div>
        </div>


        {{-- <div class="row mb-2 mx-3 col-12 text-center">
          <div class="col text-center mt-4">
            <div class="card text-center" style="width: 75px;">
              <img class="card-img-top" src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" alt="Card image cap">
              <h5 class="text-center" style="width: 100px">abc</h5>
            </div>
          </div>
          <div class="col text-center mt-4">
            <div class="card text-center" style="width: 75px;">
              <img class="card-img-top" src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" alt="Card image cap">
              <h5 class="text-center" style="width: 100px">def</h5>

            </div>
          </div>
          <div class="col text-center mt-4">
            <div class="card text-center" style="width: 75px;">
              <img class="card-img-top" src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" alt="Card image cap">
              <h5 class="ext-center" style="width: 100px">def</h5>
            </div>
          </div>
          <div class="col text-center mt-4">
            <div class="card text-center" style="width: 75px;">
              <img class="card-img-top" src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" alt="Card image cap">

              <h5 class="ext-center" style="width: 100px">def</h5>

            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </body>
  {{-- <script type="text/javascript">
    $(window).load(function() {$("#preloader").delay(500).fadeOut("slow"); })
  </script> --}}