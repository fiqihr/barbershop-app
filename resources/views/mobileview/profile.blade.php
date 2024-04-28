@include('mobileview.appview')
@include('mobileview.stickybar')

<body>
   <nav class="pt-4 navbar fixed-top navbar-expand-lg bg-white text-center pb-4">
      <h6 class="m-auto col position-absolute start-50 translate-middle-x " style="font-size: 16px">Profile</h6>
   </nav>
   <div class="container mt-6 mb-auto">
      <div class="row col d-flex text-left">
         @method('put')
         @csrf
         <img class="card img-thumbnail img-fluid shadow-lg mx-auto d-block shadow-4-strong"
            style="max-width: 50%; border-radius:50%;" src="{{  asset('storage/images/foto_user/'.$user->foto)  }}"
            alt="Card image cap">
            
         <div class="ms-3 text-left">
            <h5 class="mt-6" style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;"><i class="fa fa-user me-4"></i>{{ $user->name }}</h5>
            <h5 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;"><i class="fa fa-at me-4"></i>{{ $user->email }}</h5>
            <h5 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;"><i class="fa fa-phone me-4"></i>{{ $user->telepon }}</h5>
            <h5 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;"><i class="fa fa-house-user me-3"></i>{{ $user->alamat }}</h5>
            <h5 style="font-family: 'Poppins', 'Roboto', Helvetica, Arial, sans-serif;"><i class="fa fa-venus-mars me-3"></i> {{$user->jenis_kelamin }}</h5>
         </div>
      </div>
   </div>
   <form action="{{ route('logout') }}" method="post" class="d-flex">
      @csrf
      <button type="submit" class="btn btn-danger mx-auto px-6 mt-7">Logout</button>
   </form>
   @include('mobileview.scriptsrc')
</body>