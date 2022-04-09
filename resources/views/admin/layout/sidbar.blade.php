<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">

            <div class="profile-name">
              <h2 class="mb-0 font-weight-normal">الادمن</h2>
              <span>مرحبا بك</span>
            </div>
          </div>

        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">الاقسام</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route("home") }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title"> الرئيسية</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route("doctor.index") }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title"> الاطباء</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('appointment.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">الحجوزات</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('user.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">المستخدمين</span>
        </a>
      </li>
    </ul>
  </nav>
