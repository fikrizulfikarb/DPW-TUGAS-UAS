    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if(Auth::check())
            {{request()->user()->nama}}
            @else
              Silahkan login
            @endif
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Profile
            <div class="media">
            </div>
          </a>

          <a href="{{url('setting')}}" class="dropdown-item">
            <i class="fa fa-cog"></i> Setting
            <div class="media">
            </div>
          </a>

          <a href="{{url('ganti-bahasa')}}" class="dropdown-item">
            <i class="fa fa-cog"></i> Ganti Bahasa
            <div class="media">
            </div>
          </a>

          <a href="{{url('home')}}" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Logout
            <div class="media">
            </div>
          </a>

        </div>
      </li>

    </ul>