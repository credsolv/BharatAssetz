<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="modern-profile p-3 pb-0">
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="{{ route('admin.chat') }}">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="{{ route('admin.email') }}">Inbox</a></li>
            </ul>
        </div>
    </div>

    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="{{ route('admin.calendar') }}" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="{{ route('admin.chat') }}" class="btn btn-icon border btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="{{ route('admin.activities') }}" class="btn btn-icon border btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="{{ route('admin.email') }}" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="{{ route('admin.profile') }}">
                        <img src="{{ asset('assets/img/profiles/avatar.png') }}" class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>{{ Auth::user()->name }}</h5>
                            <h6>{{ ucfirst(Auth::user()->role) }}</h6>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- Dashboard -->
            <ul>
                <li>
                    <h6 class="submenu-hdr">Dashboard</h6>
                    <ul>
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <i class="ti ti-chart-bar"></i><span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Property Options -->
            <ul>
                <li>
                    <h6 class="submenu-hdr">Assets Options</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ request()->is('admin/property*') ? 'active' : '' }}">
                                <i class="ti ti-building"></i><span>Properties</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('admin.propertylist') }}" class="{{ request()->is('admin/propertylist') ? 'active' : '' }}">Property List</a></li>
                                    </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Reports -->
            <ul>
                <li>
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li><a href="{{ route('admin.analytics') }}" class="{{ request()->is('admin/analytics') ? 'active' : '' }}">
                            <i class="ti ti-chart-bar"></i><span>Analytics</span>
                        </a></li>
                    </ul>
                </li>
            </ul>

            <!-- Branch Management -->
            <ul>
                <li>
                    <h6 class="submenu-hdr">Branch</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ request()->is('admin/branch*') ? 'active' : '' }}">
                                <i class="ti ti-home"></i><span>Manage Branches</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ route('admin.addBranch') }}" class="{{ request()->is('admin/branch/add') ? 'active' : '' }}">
                                    <i class="ti ti-plus"></i><span>Add Branch</span></a></li>
                                <li><a href="{{ route('admin.deleteBranch') }}" class="{{ request()->is('admin/branch/delete') ? 'active' : '' }}">
                                    <i class="ti ti-trash"></i><span>Delete Branch</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</div>
<!-- /Sidebar -->
