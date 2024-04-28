@include('mobileview.appview')

<body class="sign-in-basic">
  <div class="page-header align-items-start min-vh-100 bg-white" 
  {{-- style="background-image:url('https://img.freepik.com/free-photo/barber-wallpaper-background-with-tools-job-career-concept_53876-148092.jpg?w=2000')"  --}}
    loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-2 pe-1 pb-0">
                <img src="{{ asset('template/img/barber.png') }}" class="img-fluid rounded-circle mx-auto d-block img-thumbnail" alt="" style="max-width: 20%">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">REGISTER</h4>
                <div class="row mt-3 d-flex justify-content-center">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ route('registeruser') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Nama</label>
                  <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control">
                  @error('name')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>

                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Email</label>
                  <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control">
                  @error('email')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>
                
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Password</label>
                  <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control">
                  @error('password')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>

                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Telepon</label>
                  <input type="text" value="{{ old('telepon') }}" name="telepon" id="telepon" class="form-control">
                  @error('telepon')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>

                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Alamat</label>
                  <input type="text" value="{{ old('alamat') }}" name="alamat" id="alamat" class="form-control">
                  @error('alamat')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>

                {{-- <select class="form-select form-control mb-3" name="jenis_kelamin" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select> --}}
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <select class="form-select form-control" name="jenis_kelamin" id="jenis_kelamin" >Jenis Kelamin
                    <option selected="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                  {{-- <input type="text" value="{{ old('jenis_kelamin') }}" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  @error('jenis_kelamin')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br> --}}
                </div>
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  {{-- <label for="position-option">Foto Profil</label> <br> --}}
                  {{-- <input type="file" name="foto" id="foto" class="ms-2 form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}">
                  @error('foto')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                  @enderror <br> --}}
                </div>
                {{-- <input type="file" class="form-control @error('foto') is-invalid @enderror " value="{{ old('foto') }}" name="foto" placeholder="tambahkan foto">
                @error('foto')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror <br> --}}
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">Remember
                          Me</label>
                  </div>
              </div>
                <div class="text-center mt-2">
                  <button class="btn btn-dark btn-user btn-block" type="submit" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">Register</button>
                </div>
                <p class="mt-4 text-sm text-center" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  Sudah mempunyai akun? <a href ="loginuser" style="color:blue; font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;" >Login</a>
                </p> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('mobileview.scriptsrc')
</body>

</html>