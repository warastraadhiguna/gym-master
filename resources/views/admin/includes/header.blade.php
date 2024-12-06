
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        {{ isset($title) ? $title : '' }}
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown all">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <svg height="24" class="svg-main-icon" viewBox="0 0 32 32" width="24"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <clipPath id="clip_1">
                                    <path id="artboard_1" clip-rule="evenodd" d="m0 0h32v32h-32z" />
                                </clipPath>
                                <g id="select" clip-path="url(#clip_1)">
                                    <path id="Vector"
                                        d="m4.70222 7.16834-.12871-.2574c-.0593-.11861-.13904-.22136-.23922-.30824-.10018-.08689-.21317-.1513-.33898-.19323-.1258-.04194-.25484-.0582-.38711-.0488-.13228.0094-.25772.04375-.37633.10306-.24699.12349-.41414.31622-.50147.5782-.08732.26197-.06923.51645.05426.76344l1.32093 2.64183c.0593.1186.13904.2214.23922.3083.10018.0868.21317.1512.33898.1932.1258.0419.25484.0582.38711.0488.13228-.0094.25772-.0438.37633-.1031.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l5.99999-3.99995c.1104-.07356.2024-.16543.2762-.27561s.1237-.23029.1497-.36032c.026-.13004.0261-.2601.0004-.39019-.0257-.13008-.0754-.25029-.1489-.36063-.1532-.22977-.3652-.37173-.636-.42588-.2707-.05416-.521-.00465-.7508.14853l-1.94316 1.29545-3.1143 2.07619zm11.29778-1.16834c-.2761 0-.5118.09763-.7071.29289s-.2929.43097-.2929.70711.0976.51184.2929.70711c.1953.19526.431.29289.7071.29289h14c.2761 0 .5118-.09763.7071-.29289.1953-.19527.2929-.43097.2929-.70711s-.0976-.51185-.2929-.70711-.431-.29289-.7071-.29289zm-11.27691 9.1683-.12871-.2574c-.12349-.2469-.31622-.4141-.5782-.5014-.26197-.0874-.51645-.0693-.76344.0542-.11861.0593-.22135.1391-.30824.2393-.08688.1001-.15129.2131-.19323.3389-.04193.1258-.0582.2549-.0488.3871.0094.1323.04376.2578.10306.3764l1.32092 2.6418c.1235.247.31623.4142.5782.5015.26198.0873.51646.0692.76345-.0543.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l6.00002-3.9999c.2298-.1532.3717-.3652.4259-.636.0541-.2708.0046-.521-.1486-.7508-.1531-.2298-.3651-.3717-.6359-.4259-.2708-.0541-.521-.0046-.7508.1485l-5.05749 3.3717zm11.27691-.1683c-.2761 0-.5118.0976-.7071.2929s-.2929.431-.2929.7071.0976.5118.2929.7071.431.2929.7071.2929h14c.2761 0 .5118-.0976.7071-.2929s.2929-.431.2929-.7071-.0976-.5118-.2929-.7071-.431-.2929-.7071-.2929zm-11.27691 8.1683-.12871-.2574c-.12349-.247-.31622-.4141-.5782-.5014-.26197-.0874-.51645-.0693-.76344.0542-.11861.0593-.22135.1391-.30824.2393-.08688.1001-.15129.2131-.19323.3389-.04193.1258-.0582.2549-.0488.3871.0094.1323.04376.2578.10306.3764l1.32092 2.6418c.1235.247.31623.4142.5782.5015.26198.0873.51646.0692.76345-.0543.01854-.0092.03678-.0191.05471-.0295s.03552-.0214.05277-.0329l6.00002-4c.1103-.0735.2024-.1654.2762-.2756.0738-.1101.1237-.2303.1497-.3603s.0261-.2601.0004-.3902c-.0258-.1301-.0754-.2503-.149-.3606-.1531-.2298-.3651-.3717-.6359-.4259-.2708-.0541-.521-.0046-.7508.1485l-1.94319 1.2955-3.1143 2.0762zm11.27691.8317c-.2761 0-.5118.0976-.7071.2929s-.2929.431-.2929.7071.0976.5118.2929.7071.431.2929.7071.2929h14c.2761 0 .5118-.0976.7071-.2929s.2929-.431.2929-.7071-.0976-.5118-.2929-.7071-.431-.2929-.7071-.2929z"
                                        fill-rule="evenodd" />
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="card mb-0">
                                <div class="card-header border-0 d-block h-auto">
                                    <ul class="d-flex align-items-center justify-content-around">

                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                                                <svg id="icon-light" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-sun">
                                                    <circle cx="12" cy="12" r="5">
                                                    </circle>
                                                    <line x1="12" y1="1" x2="12" y2="3">
                                                    </line>
                                                    <line x1="12" y1="21" x2="12" y2="23">
                                                    </line>
                                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64">
                                                    </line>
                                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78">
                                                    </line>
                                                    <line x1="1" y1="12" x2="3" y2="12">
                                                    </line>
                                                    <line x1="21" y1="12" x2="23" y2="12">
                                                    </line>
                                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36">
                                                    </line>
                                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22">
                                                    </line>
                                                </svg>
                                                <svg id="icon-dark" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-moon">
                                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown notification_dropdown">
                                            <a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
                                                <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20"
                                                    stroke="currentColor" stroke-width="2" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                    <path
                                                        d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                                        style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;">
                                                    </path>
                                                </svg>
                                                <svg id="icon-minimize" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="A098AE"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minimize">
                                                    <path
                                                        d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
                                                        style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                            <i id="icon-light-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-sun">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3">
                                    </line>
                                    <line x1="12" y1="21" x2="12" y2="23">
                                    </line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64">
                                    </line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78">
                                    </line>
                                    <line x1="1" y1="12" x2="3" y2="12">
                                    </line>
                                    <line x1="21" y1="12" x2="23" y2="12">
                                    </line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36">
                                    </line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22">
                                    </line>
                                </svg></i>
                            <i id="icon-dark-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-moon">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
                            <svg id="icon-full-1" viewBox="0 0 24 24" width="20" height="20"
                                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="css-i6dzq1">
                                <path
                                    d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                    style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                            <svg id="icon-minimize-1" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-minimize">
                                <path
                                    d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
                                    style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="nav-item dropdown notification_dropdown">
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>
                        </a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown header-profile2">
                            <a class="nav-link ms-0" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="header-info2 d-flex align-items-center">
                                    <div class="d-flex align-items-center sidebar-info">

                                    </div>
                                    <img src="{{ asset('admingym/images/user.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pb-0" style="">
                                <div class="card mb-0">
                                    <div class="card-header p-3">
                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <img src="{{ asset('admingym/images/user.jpg') }}" class="ms-0"
                                                    alt="">
                                            </li>
                                            <li class="ms-2">
                                                <h4 class="mb-0">{{ Auth::user()->full_name }}</h4>
                                                <span>{{ Auth::user()->role }}</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer text-center p-3">
                                        <a href="page-login.html" class="dropdown-item ai-icon btn btn-primary light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="var(--primary)"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-2 text-primary">Logout </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->
