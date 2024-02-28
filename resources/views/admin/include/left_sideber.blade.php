<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Company</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('add.company')}}">Add Company</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('manage.company')}}">Manage Company</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('manage.company.circular')}}">Manage Circular</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Role Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.role')}}"> Add Role </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.role')}}"> Manage Role </a></li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#personal-info" aria-expanded="false" aria-controls="personal-info">
            <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Candidates</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="personal-info">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('add.personal.info')}}"> Add Personal Info </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('manage.personal.info')}}"> Manage Personal Info </a></li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#advertisement" aria-expanded="false" aria-controls="advertisement">
            <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Advertisements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="advertisement">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> Add Advertisement </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Manage Advertisement </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Our Talk</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> Add Our Talk </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Manage Our Talk </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Add User </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Manage User </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Payment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Product Order</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
            <i class="ti-settings"></i>  
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Section Type</a></li>
              </ul>
            </div>
          </li>
    </ul>
</nav>


















