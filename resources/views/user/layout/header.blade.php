<header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ URL::asset('assets/img/png-02.png') }}" style="height: 60px" alt=""></a>



        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">الاطباء</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">اتصل بنا</a>
            </li>
            @if (Route::has('login'))
            @auth
            <li>
                <x-app-layout>
                </x-app-layout>
            </li>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">تسجيل الدخول</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">حساب جديد</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
