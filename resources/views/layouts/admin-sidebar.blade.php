<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="/cor/images/logo.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="cor/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            @if (Auth::user()->type == "organization")
              <img class="img-xs rounded-circle " src="/storage/logo/{{organization(Auth::user()->id)->logo}}" alt="">
            @else
              <img class="img-xs rounded-circle " src="cor/images/faces/face15.jpg" alt="">
            @endif            
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">
              @if (Auth::user()->type == "organization")
                {{ organization(Auth::user()->id)->name }}
              @else
                Admin
              @endif
            </h5>
            @if (Auth::user()->type == "organization")
            <span>Organization</span>
            @endif
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    @if (Auth::user()->type == "organization")
    <li class="nav-item menu-items">
      <a class="nav-link" href="/home">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/event-list">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Events</span>
      </a>
    </li>
    <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Register </a></li>
        </ul>
      </div>
    </li> -->
    @elseif (Auth::user()->type == "admin")
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin-home">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin-guest">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Guest</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin-organization">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Organization</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin-event">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Event</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin-category">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Event Category</span>
      </a>
    </li>
    <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Register </a></li>
        </ul>
      </div>
    </li> -->
    @endif
  </ul>
</nav>
