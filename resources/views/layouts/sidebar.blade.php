    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="/chameleon/theme-assets/images/backgrounds/04.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="brand-logo" alt="Chameleon admin logo" src="https://infaqberasjogja.com/wp-content/uploads/2020/05/4-o.png" style="filter: contrast(0);height: auto;width: 70px;"/>
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
              <li class=""><a class="menu-item" href="#">Pendidikan</a>
              </li>
              <li class=""><a class="menu-item" href="#">Jurusan</a>
              </li>
              <li class=""><a class="menu-item" href="#">Pekerjaan</a>
              </li>
              <li class=""><a class="menu-item" href="#">Amanah</a>
              </li>
              <li class=""><a class="menu-item" href="#">Divisi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-sub {{ request()->routeIs('members*') ? 'open' : '' }}"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">Kader</span></a>
            <ul class="menu-content">
              <li class="{{ request()->routeIs('members') ? 'active' : '' }}"><a class="menu-item" href="{{ route('members') }}">List Kader</a>
              </li>
              <li class=""><a class="menu-item" href="documentation-changelog.html">Add Kader</a>
              </li>
              <li class=""><a class="menu-item" href="documentation-notes.html">Trashed Data Kader</a>
              </li>
            </ul>
          </li>
          
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>

          <li class="has-sub nav-item"><a href="#"><i class="ft-server"></i><span class="menu-title" data-i18n="">Menu levels</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Second level</a>
              </li>
              <li class="has-sub"><a class="menu-item" href="#">Second level child</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="#">Third level</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

        </ul>
      </div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1"><i class="ft-power"></i> Logout</button>
      </form>
      <div class="navigation-background"></div>
    </div>