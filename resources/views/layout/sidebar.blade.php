  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/adminlte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ isActive('dashboard') }}"><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashoard</span></a></li>
        <li class="treeview {{ set_active(['master-barang','master-customer','master-kendaraan']) }}">
          <a href="#"><i class="fa fa-database"></i> <span>Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ isActive('master-barang') }}"><a href="{{ url('master-barang') }}">Barang</a></li>
            <li class="{{ isActive('master-customer') }}"><a href="{{ url('master-customer') }}">Customer</a></li>
            <li class="{{ isActive('master-kendaraan') }}"><a href="{{ url('master-kendaraan') }}">Kendaraan</a></li>
            <li><a href="#">Karyawan</a></li>
            <li><a href="#">Sopir</a></li>
            <li><a href="#">Biaya Sopir</a></li>
            <li><a href="#">Tujuan</a></li>
            <li><a href="#">Supplier</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cart-plus"></i> <span>Transaksi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Pembelian Spare Part</a></li>
            <li><a href="#">Pemakaian</a></li>
            <li><a href="#">Pembelian Ban</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cubes"></i> <span>Stock</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Ban</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-newspaper-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Barang</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>