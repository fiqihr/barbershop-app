@include('mobileview.appview')

<body class="sign-in-basic">
  <div class="page-header align-items-start min-vh-100 bg-white" 
    loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      {{-- @if(session()->has('successregister')) --}}
      {{-- @endif --}}
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-2 pe-1 pb-0">
                <img src="{{ asset('template/img/barber.png') }}" class="img-fluid rounded-circle mx-auto d-block img-thumbnail" alt="" style="max-width: 20%">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">LOGIN</h4>
                <div class="row mt-3 d-flex justify-content-center">
                </div>
              </div>
            </div>
            <div class="card-body">
              @if(session()->has('successregister'))
                <div class="alert alert-light" style="color: black; font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;" role="alert">
                  {{ session()->get('successregister') }} 
                  <br>
                </div>
              @endif
              <form action="/loginuser" class="user" method="post" role="form" >
                @csrf
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Email</label>
                  <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control"> <br>
                </div>
                  @error('email') 
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                <div class="input-group input-group-outline my-3" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  <label class="form-label">Password</label>
                  <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control">
                  @error('password')
                    <div class="text-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror <br>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">Remember
                          Me</label>
                  </div>
              </div>
                <div class="text-center mt-2">
                  <button class="btn btn-dark btn-user btn-block" type="submit" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">Login</button>
                </div>
                <p class="mt-4 text-sm text-center" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;">
                  Belum mempunyai akun? <a href ="{{ route('registeruser') }}" style="color:blue; font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;" >Register</a>
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