@include('mobileview.appview')
@include('mobileview.stickybar')
{{-- navbar --}}
<nav class="pt-3 pb-2 navbar fixed-top navbar-expand-lg bg-white text-center">
 <a href="/dashboard"><i class="m-auto fa fa-arrow-left" aria-hidden="true" style="font-size: 25px"></i></a>
 <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px">Services</h6>
</nav>

<body>
 <div class="card mt-6 mx-1">
  @foreach ($pelayanans as $index => $pelayanan)
  <ul class="list-group list-group-flush">
    <a href="/pelayananuser/{{ $pelayanan->id }}/detail" class="list-group-item py-4 d-flex justify-content-beetwen">
     {{ $pelayanan->jenis }}
     <i class="ms-auto fa fa-angle-right" aria-hidden="true" style="font-size: 25px;"></i>
    </a>
  </ul>
  @endforeach
</div>
</body>

@include('mobileview.scriptsrc')