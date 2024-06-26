<x-app-layout title="Dashboard">
 <!-- Page Wrapper -->
 <!-- Sidebar -->
 <!-- End of Sidebar -->

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content" class="img-fluid " style="background-image:url({{ asset('/images/bg-dashboard.png') }}); max-width:100%; height:auto; background-size:cover; background-repeat:no-repeat; ;">

   <!-- Topbar -->
   @include('layouts.navbar')
   <!-- End of Topbar -->

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    @if(session()->has('successlogin'))
    <div class="alert alert-success" role="alert">
     {{ session()->get('successlogin') }} <br>
    </div>
    @endif

    <!-- Content Row -->
    <div class="row mx-1 ">
     <h1 style="color: black; font-weight:bold;">Selamat datang di website admin Manson Barbershop!</h1>
    </div>

    <!-- Content Row -->

    <!-- Content Row -->


   </div>
   <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  @include('layouts.footer')
  <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->


 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
     </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
     <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
   </div>
  </div>
 </div>
</x-app-layout>
