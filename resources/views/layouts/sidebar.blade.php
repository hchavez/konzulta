    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}"  alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Konzulta</span>
      </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Doc Sien</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
  

             <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                  <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                  <p>Dashboard</p>
                </a>
              </li>

         <li class="nav-item">
            <a href="{{ url('/patients') }}" class="nav-link">
              <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>Patients</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/consultations') }}" class="nav-link">
                <i class="nav-icon fa fa-stethoscope" aria-hidden="true"></i>
              <p>Consultations</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/medications') }}" class="nav-link">
                <i class="nav-icon fa fa-medkit" aria-hidden="true"></i>
              <p>Medications</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/billing') }}" class="nav-link">
                <i class="nav-icon fa fa-calculator" aria-hidden="true"></i>
              <p>Billing</p>
            </a>
          </li>
         


     
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div