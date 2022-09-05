 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-user"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="">
                         <div class="card-body box-profile">
                             <div class="text-center">
                                 <img class="profile-user-img  img-circle"
                                     src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1780&q=80"
                                     alt="User profile picture">
                             </div>

                             <h3 class="profile-username text-center">
                                 {{-- <h2>Welcome Back</h2>{{ Auth::user()->email }} --}}
                             </h3>

                             {{-- Maintenance --}}
                             <p class="text-muted text-center">Admin</p>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- Message End -->
                 </a>
             </div>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->
