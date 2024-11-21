<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/backend/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset(get_setting('site_logo')) }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/backend/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset(get_setting('site_logo')) }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                    
                </li> <!-- end Dashboard Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.user.index')}}">
                        <i class="bi bi-person-vcard-fill"></i>
                        <span data-key="t-apps">S-License</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.punjablicense.index')}}">
                        <i class="bi bi-person-vcard-fill"></i>
                        <span data-key="t-apps">P-License</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">
                        <i class="ri-settings-4-fill"></i> Settings
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProjects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.setting.general')}}" class="nav-link" data-key="t-list"> General Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.privacy-policy')}}" class="nav-link" data-key="t-overview"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.terms-and-conditions')}}" class="nav-link" data-key="t-create-project"> Terms and Conditions </a>
                            </li>
                        </ul>
                    </div>
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>