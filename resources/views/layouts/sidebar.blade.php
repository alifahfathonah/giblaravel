    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="brand-logo" alt="Chameleon admin logo" src="/chameleon/theme-assets/images/logo/logo.png"/>
              <h3 class="brand-text">PASKAS Data</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
          <li class="nav-item has-sub open"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">Kader</span></a>
            <ul class="menu-content">
              <li class="active"><a class="menu-item" href="documentation-sources-credits.html">List Kader</a>
              </li>
              <li class=""><a class="menu-item" href="documentation-changelog.html">Add Kader</a>
              </li>
              <li class=""><a class="menu-item" href="documentation-notes.html">Trashed Data Kader</a>
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