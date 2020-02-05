<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->fullname }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="@yield('news') treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>News</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">            
              <li><a href="{{route('getNewsList')}}"><i class="fa fa-circle-o"></i>News List</a></li>
            </ul>
        </li>
        <li class="@yield('client') treeview">
            <a href="#">
              <i class="fa fa-user-md" ></i> <span>Clients</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('clientList')}}"><i class="fa fa-circle-o"></i>Clients Lists</a></li>
            </ul>
        </li>
        <li class="@yield('packages') treeview">
            <a href="#">
              <i class="fa fa-support" ></i> <span>Service Packages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('getServicePackage')}}"><i class="fa fa-circle-o"></i>Packages List</a></li>
            </ul>
        </li>
        <li class="@yield('services') treeview">
            <a href="#">
              <i class="fa fa-rebel"></i>
              <span>Our Services</span>
              <span class="pull-right-container"> 
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('getOurService')}}"><i class="fa fa-circle-o"></i>Services List</a></li>           
            </ul>
        </li>
        <li class="@yield('program') treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Program</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">            
              <li><a href="{{route('postList')}}"><i class="fa fa-circle-o"></i>Program List</a></li>
              <li><a href="{{route('categoryList')}}"><i class="fa fa-circle-o"></i>Category</a></li>
            </ul>
        </li>    
        <li class="@yield('slide') treeview">
            <a href="#">
              <i class="fa fa-sticky-note"></i>
              <span>Slide Show</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('slideList')}}"><i class="fa fa-circle-o"></i>Slide List</a></li>
            </ul>
        </li> 
        <li class="@yield('users')  treeview">
            <a href="#">
              <i class="fa fa-gear (alias)"></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('getUserList')}}"><i class="fa fa-circle-o"></i>User List</a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@include('admin.include.control')