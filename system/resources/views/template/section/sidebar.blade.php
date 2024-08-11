@php

    function checkRouteActive($route){
        if(Route::current()->uri == $route) return 'active';    
    }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ url('public') }}/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">YoloApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{request()->user()->nama}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <a href="{{ url('admin/beranda') }}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                 Beranda
              </p>
          </a>
          <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('produk')}}">
              <i class="fas fa-tags"></i>
              <p>
                 Produk
              </p>
          </a>
          <a href="{{url('admin/kategori')}}" class="nav-link {{checkRouteActive('kategori')}}">
              <i class="fas fa-th"></i>
              <p>
                 Kategori
              </p>
          </a>
          <a href="{{url('admin/promo')}}" class="nav-link {{checkRouteActive('promo')}}">
              <i class="fas fa-bullhorn"></i>
              <p>
                 Promo
              </p>
          </a>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-pie"></i>
              <p>
                 Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Iklan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suplier</p>
                </a>
              </li>
            </ul>
          </li>
          <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="fas fa-user"></i>
              <p>
                 User
              </p>
          </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>