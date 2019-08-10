<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li>
                <a href="{{url('/dashboard')}}" class="mm-active">
                    <i class="metismenu-icon fa fa-tachometer"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon fa fa-blog"></i>
                    News & Blog
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{url('/post/blog')}}">
                            <i class="metismenu-icon"></i>
                            Post news
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon">
                            </i>Manage News
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon fa fa-user"></i>
                    Users
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon"></i>
                            Manage Users
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon">
                            </i>Dropdowns
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-date"></i>
                    Events
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{route('events')}}">
                            <i class="metismenu-icon"></i>
                            Manage Events
                        </a>
                    </li>

                    <li>
                        <a href="{{route('event_categories')}}">
                            <i class="metismenu-icon"></i>
                            Events Category
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon fa fa-users"></i>
                    Staff
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{route('manage.staff')}}">
                            <i class="metismenu-icon"></i>
                            Manage Staff
                        </a>
                    </li>

                </ul>
            </li>
         <li>
         <a href="#">
                    <i class="metismenu-icon fa fa-cog"></i>
                    Settings
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{route('manage.staff')}}">
                            <i class="metismenu-icon"></i>
                            Manage Settings
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>