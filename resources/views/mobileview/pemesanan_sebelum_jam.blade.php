@include('mobileview.appview')
@include('mobileview.stickybar')

<body id="page-top" class="img-fluid position-absolute"
  style="background-image:url({{ asset('/images/background09.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat;">
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      {{-- navbar --}}
      <nav class="pt-3 navbar fixed-top navbar-expand-lg text-center pb-2" style="background-color: rgb(12, 12, 12)">
        <a href="/dashboard"><i class="m-auto fa fa-arrow-left" aria-hidden="true"
            style="font-size: 25px; color:whitesmoke;"></i></a>
        <h6 class="m-auto col position-absolute start-50 translate-middle-x "
          style="font-size: 16px; color:whitesmoke;">Pesan Pelayanan</h6>
      </nav>
      {{-- end navbar --}}
      <div class="container-fluid mt-7">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>
        <div class="row">
          {{-- <form action="/dashboard" method="post">
            @csrf --}}


            {{-- <div class="form-group mt-2">
              <label for="position-option">Nama Pelanggan</label>
              <select class="form-select" id="position-option" name="user_id">
                <option selected>---</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
              </select>
            </div> --}}
            <h6 style="font-size: 25px; color:white;">Silahkan pilih hari layanan</h6>
            @php
            $tanggal = isset($_COOKIE['cookieName']);
            // $tanggal = '2023-01-15' ;
            @endphp
            <form action="/pemesanan/tambah/" method="post" class="my-4">
              @csrf
              <input value="{{ Auth::user()->id}}" class="form mb-3" type="hidden" name="user_id" placeholder="id"> <br>
              <div class="form-group">
                <label for="tanggal" class="text-white">Tanggal</label>
                <input type="date" name="tanggal" class="form-control px-2 bg-white" id="tanggal" placeholder="tanggal"
                  aria-label="Default select example" style="border: 1px solid;">
                <button type="submit"
                  class=" text-center mt-12 btn btn-dark position-absolute start-50 translate-middle px-7">Lanjut</button>
            </form>

            {{-- <script>
              var tanggal = "tanggal";
            document.getElementById("tanggal").value = tanggal;
            </script> --}}
            {{-- </div> --}}
        {{-- <input type="text" name="status_pembayaran" placeholder="status"><br> --}}
        {{-- <input type="text" name="total_pembayaran" placeholder="total"><br> --}}
        {{-- <a class=" text-center mt-5 btn btn-dark position-absolute start-50 translate-middle px-7"
          href="/pemesanan/tambah/{{ $tanggal }}">Pesan</a> --}}
        {{-- <button class=" text-center mt-5 btn btn-dark position-absolute start-50 translate-middle px-7"
          type="submit">Pesan</button> --}}
        {{-- </form> --}}
      </div>
    </div>
  </div>
  </div>
</body>

<script>
  $("#datepicker").click(function() {
        $(this).datepicker().datepicker( "show" )
    });
  document.querySelector('input[type="submit"]').addEventListener('click', () => {
  const field1Value = document.getElementById('tanggal').value;
  document.cookie = "cookieName=".field1Value;
  // document.getElementById('tanggal_input').value = field1Value;  
});
</script>
@include('mobileview.scriptsrc')