@php
 function checkRouteActive($route){
   if(Route:: current()->uri == $route) return 'active';
 }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="foto/logo.png" class="brand-link">
      <img src="foto/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Hijab_store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="foto/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="main" class="d-block">admin_queen</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="beranda" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="katagori" class="nav-link {{checkRouteActive('katagori')}}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Katagori
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <a href="#" class="nav-link {{checkRouteActive('produk')}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="produk" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hijab_instan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produk1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hijab_Segi Empat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produk2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hijab_Phasmina</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produk3" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packing_Hijab</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="kontak" class="nav-link {{checkRouteActive('kontak')}}">
              <i class="nav-icon fas fa-phone-square"></i>
              <p>
                kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="login" class="nav-link {{checkRouteActive('login')}}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="register" class="nav-link {{checkRouteActive('register')}}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Regestrasi
              </p>
            </a>
          </li>

         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    
  </aside>