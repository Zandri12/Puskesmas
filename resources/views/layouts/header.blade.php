<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        <p id="time"></p>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <div class="header-info">
                                @if (Auth::user()->nama == null)
                                <span>User</span>
                                @else<span>{{Auth::user()->nama}}</span>
                                @endif
                                <span></span>
                                @if (Auth::user()->role == 1)
                                <small>Admin</small>
                                @elseif(Auth::user()->role == 2)
                                <small>Co-Admin</small>
                                @elseif(Auth::user()->role == 3)
                                <small>Operator</small>
                                @endif
                                
                            </div>
                            <img src="{{ asset ('template/images/profile/pic1.jpg')}}" width="20" alt=""/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                <svg id="icon-logout" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Keluar </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>