<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">  
                  @if (Auth::user()->photo)
                      <div class="custom-list-photo-member" style="background-image: url({{Storage::url(Auth::user()->photo)}});"></div>                                                    
                  @else
                      <span class="avatar avatar-online"><img src="{{ Auth::user()->getUrlfriendlyAvatar() }}" alt="{{ Auth::user()->name }}"><i></i></span>
                  @endif           
                  
                  {{-- <i class="ft-more-vertical"></i> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{ Auth::user()->getUrlfriendlyAvatar() }}" alt="avatar"><span class="user-name text-bold-700 ml-1">{{ Str::title(Auth::user()->name) }}</span></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('members.show', Auth::user()->id) }}"><i class="ft-eye"></i> Detail Profile</a>
                    <a class="dropdown-item" href="{{ route('members.edit', Auth::user()->id) }}"><i class="ft-user"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="" href="#">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="dropdown-item" style="border: none; background: none; color: inherit;"><i class="ft-power"></i> Logout</button>
                            {{-- <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                <i class="ft-power"></i> Logout
                            </x-jet-dropdown-link> --}}
                        </form>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>