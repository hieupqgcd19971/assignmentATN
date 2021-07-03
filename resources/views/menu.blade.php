<div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>


<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ATN COMPANY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to('/')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Quản lí</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('/category')}}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-border-all"></i>
                    <span>Tất cả sản phẩm</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chi tiết:</h6>
                        <a class="collapse-item" href="{{URL::to('/category')}}">Tất cả sản phẩm</a>
                        <a class="collapse-item" href="{{URL::to('/category/hot')}}">Sản phẩm nổi bật</a>
                        <a class="collapse-item" href="{{URL::to('/category/normal')}}">Sản phẩm tồn kho</a>
                        <a class="collapse-item" href="{{URL::to('/category/sale')}}">Sản phẩm giảm giá</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('/category_hot')}}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-hotjar"></i>
                    <span>Sản phẩm nổi bật</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chi tiết:</h6>
                        <a class="collapse-item" href="{{URL::to('/category')}}">Tất cả sản phẩm</a>
                        <a class="collapse-item" href="{{URL::to('/category/hot')}}">Sản phẩm nổi bật</a>
                        <a class="collapse-item" href="{{URL::to('/category/normal')}}">Sản phẩm tồn kho</a>
                        <a class="collapse-item" href="{{URL::to('/category/sale')}}">Sản phẩm giảm giá</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('/category_normal')}}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-business-time"></i>
                    <span>Sản phẩm tồn kho</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chi tiết:</h6>
                        <a class="collapse-item" href="{{URL::to('/category')}}">Tất cả sản phẩm</a>
                        <a class="collapse-item" href="{{URL::to('/category/hot')}}">Sản phẩm nổi bật</a>
                        <a class="collapse-item" href="{{URL::to('/category/normal')}}">Sản phẩm tồn kho</a>
                        <a class="collapse-item" href="{{URL::to('/category/sale')}}">Sản phẩm giảm giá</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('/category_sale')}}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-salesforce"></i>
                    <span>Sản phẩm đang sale</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chi tiết:</h6>
                        <a class="collapse-item" href="{{URL::to('/category')}}">Tất cả sản phẩm</a>
                        <a class="collapse-item" href="{{URL::to('/category/hot')}}">Sản phẩm nổi bật</a>
                        <a class="collapse-item" href="{{URL::to('/category/normal')}}">Sản phẩm tồn kho</a>
                        <a class="collapse-item" href="{{URL::to('/category/sale')}}">Sản phẩm giảm giá</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{URL::to('/list_user')}}" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Danh sách người dùng</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{URL::to('/login')}}">Đăng nhập</a>
                        <a class="collapse-item" href="register.html">Đăng ký</a>
                        <a class="collapse-item" href="forgot-password.html">Quên mật khẩus</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Khác:</h6>
                        <a class="collapse-item" href="404.html">Danh sách admin </a>
                        <a class="collapse-item" href="blank.html">Danh sách khách hàng</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/add')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Thêm sản phẩm</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Đăng xuất</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="{{asset('image/undraw_rocket.svg')}}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="">Upgrade to Pro!</a>
            </div>
            <div style="padding-bottom: 400px;"></div>
        </ul>
</div>