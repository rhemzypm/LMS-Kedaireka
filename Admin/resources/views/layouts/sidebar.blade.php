<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background-color: #2651e9;">

    <!-- LOGO -->
    <div class="navbar-brand-box" style="background-color: #2651e9;">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="logo-sm-dark" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="logo-dark" height="22">
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm-light.png') }}" alt="logo-sm-light" height="24">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/andamantau.png') }}" alt="logo-light" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
        id="vertical-menu-btn">
        <i class="ri-menu-2-line align-middle"></i>
    </button>

    <div data-simplebar class="vertical-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
                <button type="button" class="btn btn-light w-100 waves-effect waves-light border-0"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avatar-xs rounded-circle flex-shrink-0">
                                <div
                                    class="avatar-title border bg-light text-primary rounded-circle text-uppercase user-sort-name">
                                    L</div>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 text-start">
                            <h6 class="mb-1 fw-medium user-name-text"> Lecturer </h6>
                            <p class="font-size-13 text-muted user-name-sub-text mb-0"> Lecture Class Team </p>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <i class="mdi mdi-chevron-down font-size-16"></i>
                        </div>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end w-100">
                    <!-- item-->
                    <a class="dropdown-item d-flex align-items-center px-3" href="#">
                    </a>
                    <a class="dropdown-item d-flex align-items-center px-3" href="#">
                    </a>
                </div>
            </div>
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="uim uim-airplay"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uim uim-comment-message"></i>
                        <span>Apps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Kelas</a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox">Daftar Kelas</a></li>
                                <li><a href="email-read">Detail Kelas</a></li>
                            </ul>
                        </li>

                        <li><a href="calendar">Calendar</a></li>
                    </ul>
                </li>
                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uim uim-sign-in-alt"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login">Login</a></li>
                        <li><a href="auth-recoverpw">Recover Password</a></li>
                        <li><a href="auth-lock-screen">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uim uim-box"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter">Starter Page</a></li>
                        <li><a href="pages-maintenance">Maintenance</a></li>
                        <li><a href="pages-404">Error 404</a></li>
                        <li><a href="pages-500">Error 500</a></li>
                        <li><a href="pages-faq">(Help Center) FAQ</a></li>
                        <li><a href="pages-profile">Profile</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uim uim-layer-group"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">Alerts</a></li>
                        <li><a href="ui-buttons">Buttons</a></li>
                        <li><a href="ui-cards">Cards</a></li>
                        <li><a href="ui-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid">Grid</a></li>
                        <li><a href="ui-images">Images</a></li>
                        <li><a href="ui-lightbox">Lightbox</a></li>
                        <li><a href="ui-modals">Modals</a></li>
                        <li><a href="ui-offcanvas">Offcavas</a></li>
                        <li><a href="ui-rangeslider">Range Slider</a></li>
                        <li><a href="ui-roundslider">Round Slider</a></li>
                        <li><a href="ui-session-timeout">Session Timeout</a></li>
                        <li><a href="ui-progressbars">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert">Sweetalert 2</a></li>
                        <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>
                        <li><a href="ui-typography">Typography</a></li>
                        <li><a href="ui-video">Video</a></li>
                        <li><a href="ui-general">General</a></li>
                        <li><a href="ui-rating">Rating</a></li>
                        <li><a href="ui-notifications">Notifications</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="uim uim-document-layout-left"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements">Basic Elements</a></li>
                        <li><a href="form-validation">Validation</a></li>
                        <li><a href="form-plugins">Plugins</a></li>
                        <li><a href="form-editors">Editors</a></li>
                        <li><a href="form-uploads">File Upload</a></li>
                        <li><a href="form-wizard">Wizard</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uim uim-table"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-bootstrap">Bootstrap Tables</a></li>
                        <li><a href="tables-datatable">Data Tables</a></li>
                        <li><a href="tables-editable">Editable Table</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>

    <div class="dropdown px-3 sidebar-user sidebar-user-info">
        <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                        class="img-fluid header-profile-user rounded-circle" alt="">
                </div>

                <div class="flex-grow-1 ms-2 text-start">
                    <span class="ms-1 fw-medium user-name-text">Devi Fitrianah</span>
                </div>

                <div class="flex-shrink-0 text-end">
                    <i class="mdi mdi-dots-vertical font-size-16"></i>
                </div>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="pages-profile"><i
                    class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat"><i
                    class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="pages-faq"><i
                    class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile"><i
                    class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Balance : <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i
                    class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="javascript:void();"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                    class="align-middle">Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

</div>
<!-- Left Sidebar End -->
