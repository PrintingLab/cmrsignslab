<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">account_circle</i>
          <p>{{ __('Admin Profile') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'project_info' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('project_info') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Project inf') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'productionproject' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('productionproject') }}">
          <i class="material-icons">build</i>
            <p>{{ __('Production Phases') }}</p>
        </a>
      </li>


      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#aprobar" aria-expanded="true">
          <i class="material-icons">assignment_turned_in</i>
          <p>Control Approval
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="aprobar">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'byapproved' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('by_approved') }}">
                <span class="sidebar-normal">{{ __('By Approved') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('Approved') }}">
                <span class="sidebar-normal"> {{ __('Approvedt') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>



    </ul>
  </div>
</div>
