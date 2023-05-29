<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{ asset('images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">James Raphael</h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="{{ Request::is('dashboard') ? 'mm-active' : '' }}">
                    <a href="{{ route('dashboard') }}"
                        class="waves-effect {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="dripicons-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Projects</li>
                <li class="{{ Request::is('project', 'project/*') ? 'mm-active' : '' }}">
                    <a href="{{ route('project.index') }}"
                        class="waves-effect {{ Request::is('project') ? 'active' : '' }}">
                        <i class="dripicons-to-do"></i>
                        <span>Project</span>
                    </a>
                </li>

                <li class="menu-title">To Do</li>
                <li class="{{ Request::is('todo', 'todo/*') ? 'mm-active' : '' }}">
                    <a href="{{ route('todo.index') }}" class="waves-effect {{ Request::is('todo') ? 'active' : '' }}">
                        <i class="dripicons-checklist"></i>
                        <span>To Do List</span>
                    </a>
                </li>
                <li class="menu-title">Messages</li>
                <li class="{{ Request::is('message', 'message/*') ? 'mm-active' : '' }}">
                    <a href="{{ route('message.index') }}"
                        class="waves-effect {{ Request::is('message') ? 'active' : '' }}">
                        <i class="dripicons-message"></i>
                        <span>Messages</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
