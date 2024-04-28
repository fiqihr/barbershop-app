@include('mobileview.appview')
@include('mobileview.stickybar')

<body id="page-top" style="background-image:url({{ asset('/images/background-pelayanan.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat;"> 
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      {{-- navbar --}}
      <nav class="pt-3 navbar fixed-top navbar-expand-lg text-center pb-2" style="background-color: rgb(12, 12, 12)">
        <a href="/dashboard"><i class="m-auto fa fa-arrow-left" aria-hidden="true" style="color:whitesmoke;font-size: 25px"></i></a>
        <h6 class="m-auto col position-absolute start-50 translate-middle-x" style="color:whitesmoke; font-size: 16px">Pesan Pelayanan
        </h6>
      </nav>
      {{-- end navbar --}}
      <div class="container-fluid mt-8" style=color:white;>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>
        <div class="row">
          <form action="/dashboard" method="post">
            @csrf
            <input type="hidden" name="tanggal" value="{{ $tanggal }}">
            <input value="{{ Auth::user()->id}}" class="form mb-3" type="hidden" name="user_id" placeholder="id"> <br>
            <div class="form-group mt-2">
              <input type="hidden" value="{{ $tanggal }}" name="tanggal">
              <label for="position-option" class="text-white">Jenis Layanan</label>
              <select class="form-select px-2" id="position-option" name="pelayanan_id" style="background-color:white;"aria-label="Default select example">
                <option selected>---</option>
                @foreach ($pelayanans as $pelayanan)
                <option value="{{ $pelayanan->id }}">{{ $pelayanan->jenis }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group mt-5">
              <label for="position-option" class="text-white">Barberman</label>
              <select class="form-select px-2" id="position-option" name="barberman_id" style="background-color:white;aria-label="Default select example">
                <option selected>---</option>
                @foreach ($barbermen as $barberman)
                <option value="{{ $barberman->id }}">{{ $barberman->nama }}</option>
                @endforeach
              </select>
            </div>
            </div>
            @if (isset($transaksi))
            <div class="form-group mt-5">
              <label for="time" class="text-white">Jam</label>
              <select class="form-select px-2" id="position-option" name="jam" style="background-color:white;" aria-label="Default select example">
                <option selected>---</option>

                @foreach ($jam as $j)
                <option value="{{ $j->jam }}" @foreach ($transaksi as $ts ) {{ $ts->jam == $j->jam ? 'disabled' : '' }}
                  @endforeach
                  >{{ $j->jam }}</option>
                @endforeach
              </select>
              <p>Keterangan: jam tidak akan tersedia apabila sudah ada layanan pada jam tersebut</p>
            </div>
            @endif
            <button class=" text-center mt-8 btn btn-dark position-absolute start-50 translate-middle px-7"
              type="submit">Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
@include('mobileview.scriptsrc')