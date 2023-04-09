        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('commodity') }}">
                <div class="sidebar-brand-text mx-3">New - Motech</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('commodity') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DashBoard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                智慧篩選
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('commodity') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>商品管理</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                產品管理
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('product-type', ['site' => 'zh']) }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>產品類別</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('product-admin') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>產品</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                最新消息
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('news-admin') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>貼文管理</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                網站設定
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('slider-image') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>輪播設定</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('setting-admin') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>連結設定</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('banner') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Banner管理</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('third') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>合作夥伴連結管理</span></a>
            </li>

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('client')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>客端DEMO</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
