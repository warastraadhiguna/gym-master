<!--**********************************
        Sidebar start
    ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            @if (Auth::check() && (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS' || Auth::user()->role == 'FC'))
                <li>
                    <a href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="material-symbols-outlined">home</i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
            @endif

            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">article</i>
                    <span class="nav-text">Lead</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('add-data') }}">General Lead</a></li>
                    <li><a href="{{ route('one-day-visit-lead') }}">1 Day Visit Lead</a></li>
                </ul>
            </li>

            @if (Auth::check() && (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS' || Auth::user()->role == 'FC'))
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="material-symbols-outlined">person</i>
                        <span class="nav-text">Members</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('members.index') }}">Member List</a></li>
                        <li><a href="{{ route('missed-guest.index') }}">Missed Guest</a></li>
                        <li><a href="{{ route('oneDayVisit') }}">1 Day Visit</a></li>
                    </ul>
                </li>
            @endif

            @if (Auth::check() && (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS'))
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="material-symbols-outlined">person</i>
                        <span class="nav-text">Member Reg</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('member-active.index') }}">Member Active</a></li>
                        <li><a href="{{ route('member-pending') }}">Member Pending</a></li>
                        <li><a href="{{ route('member-expired.index') }}">Member Expired</a></li>
                        <li><a href="{{ route('history-member-registration') }}">History</a></li>
                    </ul>
                </li>
            @endif

            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">person</i>
                    <span class="nav-text">PT Reg</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('trainer-session.create') }}">PT Registration</a></li>
                    @if (Auth::check() && (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'CS'))
                        <li><a href="{{ route('trainer-session.index') }}">PT Active</a></li>
                        <li><a href="{{ route('trainer-session-pending') }}">PT Pending</a></li>
                        <li><a href="{{ route('trainer-session-over.index') }}">PT Expired</a></li>
                        {{-- <li><a href="{{ route('lgt') }}">LGT</a></li> --}}
                        <li><a href="{{ route('pt-history') }}">History</a></li>
                    @endif
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">app_registration</i>
                    <span class="nav-text">Report</span>
                </a>
                <ul aria-expanded="false">
                    {{-- <li><a href="{{ route('lo-report') }}">LO</a></li> --}}
                    <li><a href="{{ route('report-member-checkin') }}">Member Check In</a></li>
                    <li><a href="{{ route('report-member-pt-checkin') }}">PT Check In</a></li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Lead</a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow ms-3" href="javascript:void(0);" aria-expanded="false">General</a>
                                <ul aria-expanded="false">
                                    <li><a class="ms-5" href="{{ route('fc-total-report-member-checkin') }}">Total</a></li>
                                    <li><a class="ms-5" href="{{ route('fc-detail-report-member-checkin') }}">Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow ms-3" href="javascript:void(0);" aria-expanded="false">PT Selling</a>
                                <ul aria-expanded="false">
                                    <li><a class="ms-5" href="{{ route('fc-total-report-pt') }}">Total</a></li>
                                    <li><a class="ms-5" href="{{ route('fc-detail-report-pt') }}">Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            @if (Auth::check() && Auth::user()->role == 'ADMIN')
                <li>
                    <a href="{{ route('staff.index', ['page' => 'cs']) }}" aria-expanded="false">
                        <i class="material-symbols-outlined">person</i>
                        <span class="nav-text">Staff List</span>
                    </a>
                </li>
            @endif

            @if (Auth::check() && Auth::user()->role == 'ADMIN')
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">insert_drive_file</i>
                        <span class="nav-text">Setting</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('member-package.index') }}">Member Package</a></li>
                        <li><a href="{{ route('payment-method.index') }}">Payment Method</a></li>
                        <li><a href="{{ route('trainer-package.index') }}">Trainer Package</a></li>
                    </ul>
                </li>
            @endif
        </ul>
        <div class="copyright">
            <p>Hi, <b>{{ Auth::check() ? Auth::user()->full_name : 'Guest' }}</b></p>
        </div>
    </div>
</div>
<!--**********************************
        Sidebar end
    ***********************************-->
