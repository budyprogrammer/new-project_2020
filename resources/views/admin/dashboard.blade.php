<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <title>Admin - Dashboard</title>
<!-- Custom fonts for this template-->
  
  
<!-- frontend style css file  -->




  <!-- Custom fonts for this template-->
   @include('bootstrap-file/bootstrap-file')


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{url('admin')}}">Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
    
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          <img  width="30" src="{{asset('images/admin/uneeb.jpg')}}" class="rounded-circle"  alt="User Image">
        
        
           {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="{{ route('logout') }}"
             >profile</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </li>
    </ul>

  </nav>
   
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Password Change</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Old Password</label>
        <input type="password" class="form-control" id="oldpassword">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">New Password</label>
        <input type="password" class="form-control">
      </div>
      <div class="exampleInputPassword1">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
      </div>
      
    </div>
  </div>
</div>
  <div id="wrapper">
    
    <!-- Sidebar -->

   




 <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Home</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.category.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Category</span></a>
      </li>
    
      <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.product.index')}}">
              <i class="fas fa-fw fa-chart-area"></i>
            <span>Product</span></a>
      </li>
      

      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.view-orders')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Orders</span></a>
      </li>
    
      <li class="nav-item">
            <a class="nav-link" href="{{ url('/checkout')}}">
              <i class="fas fa-fw fa-chart-area"></i>
            <span>Checkout</span></a>
      </li>

    </ul>

  <div id="content-wrapper">

      <div class="container-fluid">

   <!-- content wrapper -->
    @yield('content')
    <!-- /.content-wrapper -->
     </div>
  </div>
</div>

  <!-- /#wrapper -->
   <!--   <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer> -->

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
  
   @yield('script')
   @include('script-file/script-file')
 

 


</body>
</html>
