<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/admin/vendors/images/'.__('admin/common.logo')) }}" alt="" class="dark-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-toggle no-arrow {{activeMenu('dashboard')}}">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">{{ __('admin/common.sidebar.dashboard') }}</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle {{activeMenu('admins')}}">
                        <span class="micon fa fa-user-o"></span><span class="mtext">{{ __('admin/common.sidebar.admins') }}</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.admins.index') }}" class="@if(!request()->routeIs('admin.admins.create')){{activeMenu('admins')}}@endif">{{ __('admin/common.sidebar.admins_sub') }}</a></li>
                        <li><a href="{{ route('admin.admins.create') }}" class="@if(request()->routeIs('admin.admins.create')) active @endif">{{ __('admin/common.sidebar.add_admin') }}</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle {{activeMenu('categories')}}">
                        <span class="micon fa fa-user-o"></span><span class="mtext">{{ __('admin/common.sidebar.categories') }}</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.categories.index') }}" class="@if(!request()->routeIs('admin.categories.create')){{activeMenu('categories')}}@endif">{{ __('admin/common.sidebar.categories_sub') }}</a></li>
                        <li><a href="{{ route('admin.categories.create') }}" class="@if(request()->routeIs('admin.categories.create')) active @endif">{{ __('admin/common.sidebar.add_category') }}</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle {{activeMenu('employees')}}">
                        <span class="micon fa fa-user-o"></span><span class="mtext">{{ __('admin/common.sidebar.employees') }}</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.employees.index') }}" class="@if(!request()->routeIs('admin.employees.create')){{activeMenu('employees')}}@endif">{{ __('admin/common.sidebar.employees_sub') }}</a></li>
                        <li><a href="{{ route('admin.employees.create') }}" class="@if(request()->routeIs('admin.employees.create')) active @endif">{{ __('admin/common.sidebar.add_employee') }}</a></li>
                    </ul>
                </li>


                {{--<li class="dropdown">--}}
                    {{--<a href="javascript:;" class="dropdown-toggle {{activeMenu('users')}}">--}}
                        {{--<span class="micon fa fa-user-o"></span><span class="mtext">{{ __('admin/common.sidebar.users') }}</span>--}}
                    {{--</a>--}}
                    {{--<ul class="submenu">--}}
                        {{--<li><a href="{{ route('admin.users.index') }}" class="@if(!request()->routeIs('admin.users.create')){{activeMenu('users')}}@endif">{{ __('admin/common.sidebar.users_sub') }}</a></li>--}}
                        {{--<li><a href="{{ route('admin.users.create') }}" class="@if(request()->routeIs('admin.users.create')) active @endif">{{ __('admin/common.sidebar.add_user') }}</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a href="javascript:;" class="dropdown-toggle {{activeMenu('admins')}}">--}}
                        {{--<span class="micon fa fa-user-secret"></span><span class="mtext">{{ __('admin/common.sidebar.admins') }}</span>--}}
                    {{--</a>--}}
                    {{--<ul class="submenu">--}}
                        {{--<li><a href="{{ route('admin.admins.index') }}" class="@if(!request()->routeIs('admin.admins.create')) {{activeMenu('admins')}} @endif">{{ __('admin/common.sidebar.admins_sub') }}</a></li>--}}
                        {{--<li><a href="{{ route('admin.admins.create') }}" class="@if(request()->routeIs('admin.admins.create')) active @endif">{{ __('admin/common.sidebar.add_admin') }}</a></li>--}}
                        {{--<li><a href="{{ route('admin.permissions.index') }}" class="{{activeMenu('permissions')}}">{{ __('admin/common.sidebar.permissions') }}</a></li>--}}
                        {{--<li><a href="{{ route('admin.roles.index') }}" class="{{activeMenu('roles')}}">{{ __('admin/common.sidebar.roles') }}</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li>
                    <a href="{{ route('admin.media.index') }}" class="dropdown-toggle no-arrow {{activeMenu('media')}}">
                        <span class="micon fa fa-file-image-o"></span><span class="mtext">{{ __('admin/common.sidebar.media') }}</span>
                    </a>
                </li>

                <li><div class="dropdown-divider"></div></li>
                <li><div class="sidebar-small-cap">{{ __('admin/common.sidebar.extra') }}</div></li>
                <li>
                    <a href="{{ route('admin.profile.edit') }}" class="dropdown-toggle no-arrow {{activeMenu('profile')}}">
                        <span class="micon fa fa-info-circle"></span><span class="mtext">{{ __('admin/common.sidebar.profile') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-power-off"></span><span class="mtext">{{ __('admin/common.sidebar.logout') }}</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
