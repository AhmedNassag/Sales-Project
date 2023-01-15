<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ahmed El.Nassag</span>
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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->


                <!-- Start الضبط العام -->
                <li class="nav-item has-treeview {{ request()->is('admin/adminpanelsetting*') || request()->is('admin/treasuries*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/adminpanelsetting*') || request()->is('admin/treasuries*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الضبط العام
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start adminPanelSetting -->
                        <li class="nav-item">
                            <a href="{{ route('admin.adminPanelSetting.index') }}" class="nav-link {{ request()->is('admin/adminpanelsetting*') ? 'active' : '' }}">
                                <p>الضبط العام</p>
                            </a>
                        </li>
                        <!-- End adminPanelSetting -->

                        <!-- Start treasuries -->
                        <li class="nav-item">
                            <a href="{{ route('admin.treasuries.index') }}" class="nav-link {{ request()->is('admin/treasuries*') ? 'active' : '' }}">
                                <p>بيانات الخزن</p>
                            </a>
                        </li>
                        <!-- End treasuries -->
                    </ul>
                </li>
                <!-- End الضبط العام -->



                <!-- Start ضبط المخازن -->
                <li class="nav-item has-treeview {{ ((request()->is('admin/sales_matrial_types*') || request()->is('admin/stores*') || request()->is('admin/uoms*') || request()->is('admin/inv_itemcard_categories*') || request()->is('admin/itemcard*')) and !request()->is('admin/itemcardBalance*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ ((request()->is('admin/sales_matrial_types*') || request()->is('admin/stores*') || request()->is('admin/uoms*') || request()->is('admin/inv_itemcard_categories*') || request()->is('admin/itemcard*')) and !request()->is('admin/itemcardBalance*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ضبط المخازن
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start sales_matrial_types -->
                        <li class="nav-item">
                            <a href="{{ route('admin.sales_matrial_types.index') }}" class="nav-link {{ request()->is('admin/sales_matrial_types*') ? 'active' : '' }}">
                                <p>
                                    بيانات فئات الفواتير
                                </p>
                            </a>
                        </li>
                        <!-- End sales_matrial_types -->

                        <!-- Start stores -->
                        <li class="nav-item">
                            <a href="{{ route('admin.stores.index') }}" class="nav-link {{ request()->is('admin/stores*') ? 'active' : '' }}">
                                <p>
                                    بيانات المخازن
                                </p>
                            </a>
                        </li>
                        <!-- End stores -->

                        <!-- Start uoms -->
                        <li class="nav-item">
                            <a href="{{ route('admin.uoms.index') }}" class="nav-link {{ request()->is('admin/uoms*') ? 'active' : '' }}">
                                <p>
                                    بيانات الوحدات
                                </p>
                            </a>
                        </li>
                        <!-- End uoms -->

                        <!-- Start inv_itemcard_categories -->
                        <li class="nav-item">
                            <a href="{{ route('inv_itemcard_categories.index') }}" class="nav-link {{ request()->is('admin/inv_itemcard_categories*') ? 'active' : '' }}">
                                <p>
                                    بيانات فئات الأصناف
                                </p>
                            </a>
                        </li>
                        <!-- End inv_itemcard_categories -->

                        <!-- Start itemcard -->
                        <li class="nav-item">
                            <a href="{{ route('admin.itemcard.index') }}" class="nav-link {{ request()->is('admin/itemcard*') ? 'active' : '' }}">
                                <p>
                                    بيانات الأصناف
                                </p>
                            </a>
                        </li>
                        <!-- End itemcard -->
                    </ul>
                </li>
                <!-- End ضبط المخازن -->



                <!-- Start الحسابات -->
                <li class="nav-item has-treeview {{ ((request()->is('admin/accountTypes*') || request()->is('admin/accounts*') || request()->is('admin/customer*') || request()->is('admin/suppliers_categories*') || request()->is('admin/supplier*') || (request()->is('admin/collect_transaction*') || request()->is('admin/exchange_transaction*') || request()->is('admin/delegates*') )) && !request()->is('admin/suppliers_orders*'))  ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link  {{ ((request()->is('admin/accountTypes*') || request()->is('admin/accounts*') || request()->is('admin/customer*') || request()->is('admin/suppliers_categories*') || request()->is('admin/supplier*') || (request()->is('admin/collect_transaction*') || request()->is('admin/exchange_transaction*') || request()->is('admin/delegates*') )) && !request()->is('admin/suppliers_orders*'))  ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الحسابات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start accountTypes -->
                        <li class="nav-item">
                            <a href="{{ route('admin.accountTypes.index') }}" class="nav-link {{ request()->is('admin/accountTypes*') ? 'active' : '' }}">
                                <p>
                                    انواع الحسابات المالية
                                </p>
                            </a>
                        </li>
                        <!-- End accountTypes -->

                        <!-- Start accounts -->
                        <li class="nav-item">
                            <a href="{{ route('admin.accounts.index') }}" class="nav-link {{ request()->is('admin/accounts*') ? 'active' : '' }}">
                                <p>
                                    كل الحسابات المالية
                                </p>
                            </a>
                        </li>
                        <!-- End accounts -->

                        <!-- Start customer -->
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.index') }}" class="nav-link {{ (request()->is('admin/customer*') )?'active':'' }}">
                                <p>
                                    حسابات العملاء
                                </p>
                            </a>
                        </li>
                        <!-- End customer -->

                        <!-- Start delegates -->
                        <li class="nav-item">
                            <a href="{{ route('admin.delegates.index') }}" class="nav-link {{ (request()->is('admin/delegates*') )?'active':'' }}">
                                <p>
                                    حسابات المناديب
                                </p>
                            </a>
                        </li>
                        <!-- End delegates -->

                        <!-- Start suppliers_categories -->
                        <li class="nav-item">
                            <a href="{{ route('admin.suppliers_categories.index') }}" class="nav-link {{ (request()->is('admin/suppliers_categories*') )?'active':'' }}">
                                <p>
                                    فئات الموردين
                                </p>
                            </a>
                        </li>
                        <!-- End suppliers_categories -->

                        <!-- Start supplier -->
                        <li class="nav-item">
                            <a href="{{ route('admin.supplier.index') }}" class="nav-link {{ (request()->is('admin/supplier*') and !request()->is('admin/suppliers_categories*') )?'active':'' }}">
                                <p>
                                    حسابات الموردين
                                </p>
                            </a>
                        </li>
                        <!-- End supplier -->

                        <!-- Start collect_transaction -->
                        <li class="nav-item">
                            <a href="{{ route('admin.collect_transaction.index') }}" class="nav-link {{ (request()->is('admin/collect_transaction*') )?'active':'' }}">
                                <p>
                                    شاشة تحصيل النقدية
                                </p>
                            </a>
                        </li>
                        <!-- End collect_transaction -->

                        <!-- Start exchange_transaction -->
                        <li class="nav-item">
                            <a href="{{ route('admin.exchange_transaction.index') }}" class="nav-link {{ (request()->is('admin/exchange_transaction*') )?'active':'' }}">
                                <p>
                                    شاشة صرف النقدية
                                </p>
                            </a>
                        </li>
                        <!-- End exchange_transaction -->
                    </ul>
                </li>
                <!-- End الحسابات -->



                <!-- Start حركات مخزنية -->
                <li class="nav-item has-treeview {{ (request()->is('admin/suppliers_orders*') || request()->is('admin/suppliers_orders_general_return*') || request()->is('admin/itemcardBalance*') || request()->is('admin/stores_inventory*') )? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/suppliers_orders*') || request()->is('admin/suppliers_orders_general_return*') || request()->is('admin/itemcardBalance*') || request()->is('admin/stores_inventory*') ) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            حركات مخزنية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start suppliers_orders -->
                        <li class="nav-item">
                            <a href="{{ route('admin.suppliers_orders.index') }}" class="nav-link {{ (request()->is('admin/suppliers_orders*') and !request()->is('admin/suppliers_orders_general_return*') ) ? 'active' : '' }}">
                                <p>
                                    فواتير المشتريات
                                </p>
                            </a>
                        </li>
                        <!-- Start suppliers_orders -->

                        <!-- Start suppliers_orders_general_return -->
                        <li class="nav-item">
                            <a href="{{ route('admin.suppliers_orders_general_return.index') }}" class="nav-link {{ (request()->is('admin/suppliers_orders_general_return*') ) ? 'active' : '' }}">
                                <p>
                                    فواتير مرتجع المشتريات العام
                                </p>
                            </a>
                        </li>
                        <!-- End suppliers_orders_general_return -->

                        <!-- Start stores_inventory -->
                        <li class="nav-item">
                            <a href="{{ route('admin.stores_inventory.index') }}" class="nav-link {{ (request()->is('admin/stores_inventory*')  )?'active':'' }}">
                                <p>
                                    جرد المخازن
                                </p>
                            </a>
                        </li>
                        <!-- End stores_inventory -->

                        <!-- Start itemcardBalance -->
                        <li class="nav-item">
                            <a href="{{ route('admin.itemcardBalance.index') }}" class="nav-link {{ (request()->is('admin/itemcardBalance*')) ? 'active' : '' }}">
                                <p>
                                    أرصدة الأصناف
                                </p>
                            </a>
                        </li>
                        <!-- End itemcardBalance -->

                    </ul>
                </li>
                <!-- End حركات مخزنية -->



                <!-- Start المبيعات -->
                <li class="nav-item has-treeview {{ (request()->is('admin/SalesInvoices*') || request()->is('admin/SalesReturnInvoices*') ) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/SalesInvoices*')  || request()->is('admin/SalesReturnInvoices*') ) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            المبيعات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start SalesInvoices -->
                        <li class="nav-item">
                            <a href="{{ route('admin.SalesInvoices.index') }}" class="nav-link {{ (request()->is('admin/SalesInvoices*') ) ? 'active' : '' }}">
                                <p>
                                    فواتير المبيعات
                                </p>
                            </a>
                        </li>
                        <!-- End SalesInvoices -->

                        <!-- Start SalesReturnInvoices -->
                        <li class="nav-item">
                            <a href="{{ route('admin.SalesReturnInvoices.index') }}" class="nav-link {{ (request()->is('admin/SalesReturnInvoices*') ) ? 'active' : '' }}">
                                <p>
                                    مرتجع المبيعات العام
                                </p>
                            </a>
                        </li>
                        <!-- End SalesReturnInvoices -->
                    </ul>
                </li>
                <!-- End المبيعات -->



                <!-- Start خدمات داخلية وخارجية -->
                <li class="nav-item has-treeview  {{ (request()->is('admin/Services*') ||request()->is('admin/Services_orders*') ) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/Services*') ||request()->is('admin/Services_orders*') )?  'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            خدمات داخلية وخارجية
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start Services -->
                        <li class="nav-item">
                            <a href="{{ route('admin.Services.index') }}" class="nav-link {{ (request()->is('admin/Services*') and !request()->is('admin/Services_orders*') ) ? 'active' : '' }}">
                                <p>
                                    ضبط الخدمات
                                </p>
                            </a>
                        </li>
                        <!-- Start Services -->

                        <!-- Start Services_orders -->
                        <li class="nav-item">
                            <a href="{{ route('admin.Services_orders.index') }}" class="nav-link {{ (request()->is('admin/Services_orders*') ) ? 'active' : '' }}">
                                <p>
                                    فواتير الخدمات
                                </p>
                            </a>
                        </li>
                        <!-- Start Services_orders -->
                    </ul>
                </li>
                <!-- End خدمات داخلية وخارجية -->



                <!-- Start حركة شفت الخزينة -->
                <li class="nav-item has-treeview {{ (request()->is('admin/admin_shift*') ) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/admin_shift*') ) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            حركة شفت الخزينة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start admin_shift -->
                        <li class="nav-item">
                            <a href="{{ route('admin.admin_shift.index') }}" class="nav-link {{ (request()->is('admin/admin_shift*') ) ? 'active' : '' }}">
                                <p>
                                    شفتات الخزن
                                </p>
                            </a>
                        </li>
                        <!-- End admin_shift -->
                    </ul>
                </li>
                <!-- End حركة شفت الخزينة -->


                <!-- Start الصلاحيات -->
                <li class="nav-item has-treeview {{ (request()->is('admin/admins_accounts*') ) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('admin/admins_accounts*') ) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الصلاحيات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start admins_accounts -->
                        <li class="nav-item">
                            <a href="{{ route('admin.admins_accounts.index') }}" class="nav-link {{ (request()->is('admin/admins_accounts*') ) ? 'active' : '' }}">
                                <p>
                                    المستخدمين
                                </p>
                            </a>
                        </li>
                        <!-- End admins_accounts -->
                    </ul>
                </li>
                <!-- End الصلاحيات -->



                <!-- Start التقارير -->
                <li class="nav-item has-treeview {{ (request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') ) ? 'menu-open' : '' }}     ">
                    <a href="#" class="nav-link {{ (request()->is('admin/FinancialReport*') || request()->is('admin/customeraccountmirror*') ||request()->is('admin/FinancialReport/delegateaccountmirror') ) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            التقارير
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Start FinancialReport.supplieraccountmirror -->
                        <li class="nav-item">
                            <a href="{{ route('admin.FinancialReport.supplieraccountmirror') }}" class="nav-link {{ (request()->is('admin/FinancialReport/supplieraccountmirror') ) ? 'active' : '' }}">
                            <p>
                                كشف حساب مورد
                            </p>
                            </a>
                        </li>
                        <!-- End FinancialReport.supplieraccountmirror -->

                        <!-- Start FinancialReport.customeraccountmirror -->
                        <li class="nav-item">
                            <a href="{{ route('admin.FinancialReport.customeraccountmirror') }}" class="nav-link {{ (request()->is('admin/FinancialReport/customeraccountmirror') ) ? 'active' : '' }}">
                                <p>
                                    كشف حساب عميل
                                </p>
                            </a>
                        </li>
                        <!-- End FinancialReport.customeraccountmirror -->

                        <!-- Start FinancialReport.delegateaccountmirror -->
                        <li class="nav-item">
                            <a href="{{ route('admin.FinancialReport.delegateaccountmirror') }}" class="nav-link {{ (request()->is('admin/FinancialReport/delegateaccountmirror') ) ? 'active' : '' }}">
                                <p>
                                    كشف حساب مندوب
                                </p>
                            </a>
                        </li>
                        <!-- End FinancialReport.delegateaccountmirror -->
                    </ul>
                </li>
                <!-- End التقارير -->



                <!-- Start المراقبة والدعم الفني -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            المراقبة والدعم الفني
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                    </ul>
                </li>
                <!-- End المراقبة والدعم الفني -->


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
