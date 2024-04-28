@include('mobileview.appview')
@include('mobileview.stickybar')


{{-- navbar --}}
<body class="img-fluid position-absolute" style="background-image:url({{ asset('/images/background11.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat;">
  {{-- <div id="preloader" style="
  position:fixed;
  width: 100%;
  height: 100%;
  z-index: 999;
  background:src('{{ asset('template/gif/preloader.gif') }}') 50% no-repeat;
  "></div> --}}

<nav class="pt-3 pb-2 navbar fixed-top navbar-expand-lg text-center" style="background-color: rgb(12, 12, 12)">
  <a href="/dashboard"><i class="m-auto fa fa-arrow-left" aria-hidden="true" style="font-size: 25px; color:white"></i></a>
  <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px; color:white">Barberman</h6>
</nav>
{{-- end navbar --}}


<div class="container-fluid mt-6">
  <div class="row">
  @foreach ($barbermen as $index => $barberman)
  <div class="col text-center mt-4">
    <div class="card text-center" style="width: auto;">
      <img class="card-img-top" src="{{ asset('storage/images/foto_barberman/'.$barberman->foto) }}"
        alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">{{
          $barberman -> nama }}</h5>
        <a href="/barbermenuser/{{ $barberman->id }}/detail" class="btn btn-dark"
          style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">Info</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>
@include('mobileview.scriptsrc')
</body>
{{-- <tr>
  <td>{{ $index +1 }}</td>
  <td> {{ $barberman -> nama }}</td>
</tr> --}}


{{-- <div class="card-columns">
  <div class="card" style="width: 150px">
    <img src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Belajar Bootstrap 4</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
        This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
    </div>
  </div>
  <div class="card" style="width: 150px">
    <img src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Belajar Bootstrap 4</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('mobile/assets/img/bruce-mars.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Belajar Bootstrap 4</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
        This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
    </div>
  </div>
</div> --}}