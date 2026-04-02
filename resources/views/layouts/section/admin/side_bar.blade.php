<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}">
                        <i class="far fa-chart-bar"></i>
                        <span>Thống kê doanh thu</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="{{ request()->routeIs('blog.index') || request()->routeIs('blog.create') || request()->routeIs('blog.edit') ? 'active' : '' }}"
                        href="javascript:;">
                        <i class="fab fa-blogger-b"></i>
                        <span>Quản lý bài viết</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a class="{{ request()->routeIs('blog.create') ? 'active' : '' }}"
                                href="{{ route('blog.create') }}">
                                <i class="far fa-plus-square"></i> Thêm bài viết
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('blog.index') ? 'active' : '' }}"
                                href="{{ route('blog.index') }}">
                                <i class="far fa-list-alt"></i> Danh sách bài viết
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </div>
</aside>
