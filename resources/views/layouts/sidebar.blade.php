    <div class="main-menu menu-fixed menu-accordion menu-shadow menu-dark" data-scroll-to-active="true" data-img="/chameleon/theme-assets/images/backgrounds/04.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="brand-logo custom-sidebar-logo" alt="Paskas logo" src="https://infaqberasjogja.com/wp-content/uploads/2020/05/4-o.png"/>
              <h3 class="brand-text">Chameleon</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="{{ request()->routeIs('dashboard') ? 'active admin-sidebar-dash-active' : '' }}"><a href="{{ route('dashboard') }}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class="nav-item has-sub {{ request()->routeIs('masters*') ? 'open' : '' }}"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Master</span></a>
            <ul class="menu-content">
              <li class="{{ request()->routeIs('masters.specializations*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.specializations.index') }}">Peminatan</a>
              </li>
              <li class="{{ request()->routeIs('masters.graduates*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.graduates.index') }}">Pendidikan</a>
              </li>
              <li class="{{ request()->routeIs('masters.majors*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.majors.index') }}">Jurusan Pendidikan</a>
              </li>
              <li class="{{ request()->routeIs('masters.jobs*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.jobs.index') }}">Pekerjaan</a>
              </li>
              <li class="{{ request()->routeIs('masters.amanah*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.amanah.index') }}">Amanah</a>
              </li>
              <li class="{{ request()->routeIs('masters.divisions*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.divisions.index') }}">Divisi</a>
              </li>
              <li class="{{ request()->routeIs('masters.sosmeds*') ? 'active' : '' }}"><a class="menu-item" href="{{ route('masters.sosmeds.index') }}">Social Media</a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-sub {{ request()->routeIs('members*') ? 'open' : '' }}"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">Kader</span></a>
            <ul class="menu-content">
              <li class="{{ request()->routeIs('members.index') ? 'active' : '' }}"><a class="menu-item" href="{{ route('members.index') }}">List Kader</a>
              </li>
              <li class="{{ request()->routeIs('members.create') ? 'active' : '' }}"><a class="menu-item" href="{{ route('members.create') }}">Tambah Kader</a>
              </li>

              @if (request()->routeIs('members.edit*'))
                <li class="{{ request()->routeIs('members.edit*') ? 'active' : '' }}"><a class="menu-item" href="#">Edit Member</a>
                </li>
              @endif

              <li class="{{ request()->routeIs('members.view-trashed') ? 'active' : '' }}"><a class="menu-item" href="{{ route('members.view-trashed') }}">Data Sampah</a>
              </li>
              
              @if (request()->routeIs('members.show*'))
                <li class="{{ request()->routeIs('members.show*') ? 'active' : '' }}"><a class="menu-item" href="#">Detail Member</a>
                </li>
              @endif

            </ul>
          </li>

        </ul>
      </div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn @if(request()->routeIs('masters*'))btn-danger @else btn-primary @endif btn-block btn-glow btn-upgrade-pro mx-1"><i class="ft-power"></i> Logout</button>
      </form>
      <div class="navigation-background"></div>
    </div>