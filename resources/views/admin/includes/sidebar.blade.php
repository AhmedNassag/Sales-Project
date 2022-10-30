<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/Ahmed.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <!-- Start adminPanelSetting -->
                <li class="nav-item">
                    <a href="{{ route('admin.adminPanelSetting.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            الضبط العام
                        </p>
                    </a>
                </li>
                <!-- End adminPanelSetting -->

                <!-- Start treasuries -->
                <li class="nav-item">
                    <a href="{{ route('admin.treasuries.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات الخزن
                        </p>
                    </a>
                </li>
                <!-- End treasuries -->

                <!-- Start sales_matrial_types -->
                <li class="nav-item">
                    <a href="{{ route('admin.sales_matrial_types.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات فئات الفواتير
                        </p>
                    </a>
                </li>
                <!-- End sales_matrial_types -->

                <!-- Start stores -->
                <li class="nav-item">
                    <a href="{{ route('admin.stores.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات المخازن
                        </p>
                    </a>
                </li>
                <!-- End stores -->

                <!-- Start uoms -->
                <li class="nav-item">
                    <a href="{{ route('admin.uoms.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات الوحدات
                        </p>
                    </a>
                </li>
                <!-- End uoms -->

                <!-- Start inv_itemcard_categories -->
                <li class="nav-item">
                    <a href="{{ route('inv_itemcard_categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات فئات الأصناف
                        </p>
                    </a>
                </li>
                <!-- End inv_itemcard_categories -->

                <!-- Start itemcard -->
                <li class="nav-item">
                    <a href="{{ route('admin.itemcard.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            بيانات الأصناف
                        </p>
                    </a>
                </li>
                <!-- End itemcard -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
