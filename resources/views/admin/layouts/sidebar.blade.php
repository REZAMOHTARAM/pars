<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light">سامانه ارزیابی فنی پارس</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
            <!-- Sidebar arzyabi panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2" style="direction: rtl">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @if(auth()->user()->isSuperUser())
                    <li class="nav-item">
                        <a href="{{ route('admin.') }}" class="nav-link {{ isActive('admin.') }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>پنل مدیریت</p>
                        </a>
                    </li>
                    @endif
                    @if(! auth()->user()->isSuperUser())
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>پنل مدیریت</p>
                        </a>
                    </li>
                    @endif
                    @can('edit-users')
                    <li class="nav-item has-treeview {{isActive(['admin.users.index' , 'admin.users.create' , 'admin.users.edit'] , 'menu-open')}} ">
                        <a href="{{route('admin.users.index')}}" class="nav-link {{isActive(['admin.users.index' , 'admin.users.create' , 'admin.users.edit'])}}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.users.index')}}" class="nav-link {{isActive(['admin.users.index'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>فهرست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{isActive(['admin.bunches.index' , 'admin.bunches.create' , 'admin.bunches.edit'] , 'menu-open')}} ">
                        <a href="{{route('admin.bunches.index')}}" class="nav-link {{isActive(['admin.bunches.index' , 'admin.bunches.create' , 'admin.bunches.edit'])}}">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                ساختار ارزیابی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.bunches.index')}}" class="nav-link {{isActive(['admin.bunches.index'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>شاخه های اصلی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{isActive(['admin.permissions.index' , 'admin.permissions.create' , 'admin.permissions.edit' , 'admin.roles.index' , 'admin.roles.create' , 'admin.roles.edit'] , 'menu-open')}} ">
                        <a href="{{route('admin.permissions.index')}}" class="nav-link {{isActive(['admin.permissions.index' , 'admin.permissions.create' , 'admin.permissions.edit' , 'admin.roles.index' , 'admin.roles.create' , 'admin.roles.edit'])}}">
                            <i class="nav-icon fa fa-user-secret"></i>
                            <p>
                                مجوزها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.permissions.index')}}" class="nav-link {{isActive(['admin.permissions.index'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مجوز انفرادی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.roles.index')}}" class="nav-link {{isActive(['admin.roles.index'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مجوز گروهی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    <li class="nav-item has-treeview {{isActive(['admin.arzyabi.index' , 'arzyabi.create' , 'arzyabi.edit'] , 'menu-open')}} ">
                        <a href="{{route('admin.arzyabi.index')}}" class="nav-link {{isActive(['admin.arzyabi.index' , 'arzyabi.create' , 'arzyabi.edit'])}}">
                            <i class="nav-icon fa fa-pencil"></i>
                            <p>
                                ارزیابی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('edit-users')
                            <li class="nav-item">
                                <a href="{{route('admin.arzyabi.index')}}" class="nav-link {{isActive(['admin.arzyabi.index'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>گزارشات ارزیابی</p>
                                </a>
                            </li>
                            @endcan
                            <li class="nav-item">
                                <a href="{{route('arzyabi.create')}}" class="nav-link {{isActive(['arzyabi.create'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>فرم ارزیابی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                    <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-fire-extinguisher nav-icon"></i>
                            {{ __('خروج') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
