@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{ backpack_url('gimnasta') }}"><i class="fa fa-female"></i> <span>Gimnastas</span></a></li>
          <li><a href="{{ backpack_url('calificacion') }}"><i class="fa fa-check"></i> <span>Calificaciones</span></a></li>
          <li><a href="{{ backpack_url('gimnasio') }}"><i class="fa fa-home"></i> <span>Gimnacios</span></a></li>
          <li><a href="{{ backpack_url('ciudad') }}"><i class="fa fa-globe"></i> <span>Ciudades</span></a></li>
          <li><a href="{{ backpack_url('juez') }}"><i class="fa fa-users"></i> <span>Jueces</span></a></li>
          <li><a href="{{ backpack_url('mesa') }}"><i class="fa fa-table"></i> <span>Mesas de Juicio</span></a></li>
          <li><a href="{{ backpack_url('capturista') }}"><i class="fa fa-laptop"></i> <span>Capturistas</span></a></li>



          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
