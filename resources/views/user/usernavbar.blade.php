
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/redirect')}}"><img src="user/assets/images/URND.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/ownproject')}}">
              <span class="menu-title">Project</span>
            </a>
          </li>
                  @auth
          <li class="nav-item menu-items">
          <span class="nav-link">
            <a href="{{ route('logout') }}" onclick ="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form method="POST" action="{{ route('logout')}}">
            @csrf
            <x-jet-responsive-nav-link href="{{ ('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
              <span class="menu-title">Logout</span>
            </x-jet-responsive-nav-link>
            </form>
            @csrf
            </form></a>
          </span>     
          </li>
          @endauth   
        </ul>
      </nav>
      <!-- partial -->
          <!-- partial -->
