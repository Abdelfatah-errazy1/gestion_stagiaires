<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">GeSta</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->


  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->
      <li class="nav-item d-block ">
        <div class="float-end ">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Import 
        </button>  
        </div>
        
<!-- Modal -->



        </a>
      </li><!-- End Search Icon-->
      <li class="nav-item d-block  ">
            <a class="btn btn-success mx-2" href="{{ url('/save') }}">Sauvgarder</a>
       
      </li><!-- End Search Icon-->
      @php
        $notification=\App\Models\Notificaiton::all()
        
      @endphp
      
      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">{{ count($notification) }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          @foreach ( $notification as $n)
            
          <li class="dropdown-header">
            {{ $n->titre }}
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          @endforeach

         
        </ul>

      </li>

         </ul>
  </nav>

</header>
