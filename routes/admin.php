<?php

use App\Http\Controllers\Admin\Account_typesController;
use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminPanelSettingController;
use App\Http\Controllers\Admin\Admins_ShiftsContoller;
use App\Http\Controllers\Admin\CollectController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ExchangeController;
use App\Http\Controllers\Admin\Inv_item_card_categoriesController;
use App\Http\Controllers\Admin\TreasuriesController;
use App\Http\Controllers\Admin\SalesMatrialTypesController;
use App\Http\Controllers\Admin\StoresController;
use App\Http\Controllers\Admin\Inv_UomController;
use App\Http\Controllers\Admin\InvItemCardController;
use App\Http\Controllers\Admin\SalesInvoicesController;
use App\Http\Controllers\Admin\SupplierCategoriesController;
use App\Http\Controllers\Admin\Suppliers_with_ordersController;
use App\Http\Controllers\Admin\SuppliersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// define('PAGINATION_COUNT',10);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function(){
    Route::get('login', [LoginController::class,'show_login_view'])->name('admin.showlogin');
    Route::post('login', [LoginController::class,'login'])->name('admin.login');
});


Route::group([/*'namespace' => 'Admin',*/ 'prefix' => 'admin', 'middleware' => 'auth:admin'], function(){

    Route::get('dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');


    /********************************* Start adminpanelsetting *********************************/
    Route::get('adminpanelsetting/index', [AdminPanelSettingController::class,'index'])->name('admin.adminPanelSetting.index');
    Route::get('/adminpanelsetting/edit',[AdminPanelSettingController::class,'edit'])->name('admin.adminPanelSetting.edit');
    Route::post('/adminpanelsetting/update',[AdminPanelSettingController::class,'update'])->name('admin.adminPanelSetting.update');
    /********************************* End adminpanelsetting *********************************/


    /********************************* Start treasuries *********************************/
    Route::get('/treasuries/index',[TreasuriesController::class,'index'])->name('admin.treasuries.index');
    Route::get('/treasuries/create',[TreasuriesController::class,'create'])->name('admin.treasuries.create');
    Route::post('/treasuries/store',[TreasuriesController::class,'store'])->name('admin.treasuries.store');
    Route::get('/treasuries/edit/{id}',[TreasuriesController::class,'edit'])->name('admin.treasuries.edit');
    Route::post('/treasuries/update/{id}',[TreasuriesController::class,'update'])->name('admin.treasuries.update');
    Route::post('/treasuries/ajax_search',[TreasuriesController::class,'ajax_search'])->name('admin.treasuries.ajax_search');
    Route::get('/treasuries/details/{id}',[TreasuriesController::class,'details'])->name('admin.treasuries.details');
    Route::get('/treasuries/Add_treasuries_delivery/{id}',[TreasuriesController::class,'Add_treasuries_delivery'])->name('admin.treasuries.Add_treasuries_delivery');
    Route::post('/treasuries/store_treasuries_delivery/{id}',[TreasuriesController::class,'store_treasuries_delivery'])->name('admin.treasuries.store_treasuries_delivery');
    Route::get('/treasuries/delete_treasuries_delivery/{id}',[TreasuriesController::class,'delete_treasuries_delivery'])->name('admin.treasuries.delete_treasuries_delivery');
    /********************************* End treasuries *********************************/


    /********************************* Start sales_matrial_types *********************************/
    Route::get('/sales_matrial_types/index', [SalesMatrialTypesController::class, 'index'])->name('admin.sales_matrial_types.index');
    Route::get('/sales_matrial_types/create', [SalesMatrialTypesController::class, 'create'])->name('admin.sales_matrial_types.create');
    Route::post('/sales_matrial_types/store', [SalesMatrialTypesController::class, 'store'])->name('admin.sales_matrial_types.store');
    Route::get('/sales_matrial_types/edit/{id}', [SalesMatrialTypesController::class, 'edit'])->name('admin.sales_matrial_types.edit');
    Route::post('/sales_matrial_types/update/{id}', [SalesMatrialTypesController::class, 'update'])->name('admin.sales_matrial_types.update');
    Route::get('/sales_matrial_types/delete/{id}', [SalesMatrialTypesController::class, 'delete'])->name('admin.sales_matrial_types.delete');
    /********************************* End sales_matrial_types *********************************/


    /********************************* Start stores *********************************/
    Route::get('/stores/index', [StoresController::class, 'index'])->name('admin.stores.index');
    Route::get('/stores/create', [StoresController::class, 'create'])->name('admin.stores.create');
    Route::post('/stores/store', [StoresController::class, 'store'])->name('admin.stores.store');
    Route::get('/stores/edit/{id}', [StoresController::class, 'edit'])->name('admin.stores.edit');
    Route::post('/stores/update/{id}', [StoresController::class, 'update'])->name('admin.stores.update');
    Route::get('/stores/delete/{id}', [StoresController::class, 'delete'])->name('admin.stores.delete');
    /********************************* End stores *********************************/


    /********************************* Start uoms *********************************/
    Route::get('/uoms/index', [Inv_UomController::class, 'index'])->name('admin.uoms.index');
    Route::get('/uoms/create', [Inv_UomController::class, 'create'])->name('admin.uoms.create');
    Route::post('/uoms/store', [Inv_UomController::class, 'store'])->name('admin.uoms.store');
    Route::get('/uoms/edit/{id}', [Inv_UomController::class, 'edit'])->name('admin.uoms.edit');
    Route::post('/uoms/update/{id}', [Inv_UomController::class, 'update'])->name('admin.uoms.update');
    Route::get('/uoms/delete/{id}', [Inv_UomController::class, 'delete'])->name('admin.uoms.delete');
    Route::post('/uoms/ajax_search', [Inv_UomController::class, 'ajax_search'])->name('admin.uoms.ajax_search');
    /********************************* End uoms *********************************/


    /********************************* Start inv_itemcard_categories *********************************/
    Route::resource('/inv_itemcard_categories', Inv_item_card_categoriesController::class);
    Route::get('/inv_itemcard_categories/delete/{id}', [Inv_item_card_categoriesController::class, 'delete'])->name('inv_itemcard_categories.delete');
    /********************************* End inv_itemcard_categories *********************************/


    /********************************* Start itemcard *********************************/
    Route::get('/itemcard/index', [InvItemCardController::class, 'index'])->name('admin.itemcard.index');
    Route::get('/itemcard/create', [InvItemCardController::class, 'create'])->name('admin.itemcard.create');
    Route::post('/itemcard/store', [InvItemCardController::class, 'store'])->name('admin.itemcard.store');
    Route::get('/itemcard/edit/{id}', [InvItemCardController::class, 'edit'])->name('admin.itemcard.edit');
    Route::post('/itemcard/update/{id}', [InvItemCardController::class, 'update'])->name('admin.itemcard.update');
    Route::get('/itemcard/delete/{id}', [InvItemCardController::class, 'delete'])->name('admin.itemcard.delete');
    Route::post('/itemcard/ajax_search', [InvItemCardController::class, 'ajax_search'])->name('admin.itemcard.ajax_search');
    Route::get('/itemcard/show/{id}', [InvItemCardController::class, 'show'])->name('admin.itemcard.show');
    /********************************* End itemcard *********************************/


    /********************************* Start accountTypes *********************************/
    Route::get('/accountTypes/index', [Account_typesController::class, 'index'])->name('admin.accountTypes.index');
    /********************************* End accountTypes *********************************/


    /********************************* Start accounts *********************************/
    Route::get('/accounts/index', [AccountsController::class, 'index'])->name('admin.accounts.index');
    Route::get('/accounts/create', [AccountsController::class, 'create'])->name('admin.accounts.create');
    Route::post('/accounts/store', [AccountsController::class, 'store'])->name('admin.accounts.store');
    Route::get('/accounts/edit/{id}', [AccountsController::class, 'edit'])->name('admin.accounts.edit');
    Route::post('/accounts/update/{id}', [AccountsController::class, 'update'])->name('admin.accounts.update');
    Route::get('/accounts/delete/{id}', [AccountsController::class, 'delete'])->name('admin.accounts.delete');
    Route::post('/accounts/ajax_search', [AccountsController::class, 'ajax_search'])->name('admin.accounts.ajax_search');
    Route::get('/accounts/show/{id}', [AccountsController::class, 'show'])->name('admin.accounts.show');
    /********************************* End accounts *********************************/


    /********************************* Start customer *********************************/
    Route::get('/customer/index', [CustomerController::class, 'index'])->name('admin.customer.index');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('admin.customer.create');
    Route::post('/customer/store', [CustomerController::class, 'store'])->name('admin.customer.store');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('admin.customer.edit');
    Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('admin.customer.update');
    Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('admin.customer.delete');
    Route::post('/customer/ajax_search', [CustomerController::class, 'ajax_search'])->name('admin.customer.ajax_search');
    Route::get('/customer/show/{id}', [CustomerController::class, 'show'])->name('admin.customer.show');
    /********************************* End customer *********************************/


    /********************************* Start suppliers_categories *********************************/
    Route::get('/suppliers_categories/index', [SupplierCategoriesController::class, 'index'])->name('admin.suppliers_categories.index');
    Route::get('/suppliers_categories/create', [SupplierCategoriesController::class, 'create'])->name('admin.suppliers_categories.create');
    Route::post('/suppliers_categories/store', [SupplierCategoriesController::class, 'store'])->name('admin.suppliers_categories.store');
    Route::get('/suppliers_categories/edit/{id}', [SupplierCategoriesController::class, 'edit'])->name('admin.suppliers_categories.edit');
    Route::post('/suppliers_categories/update/{id}', [SupplierCategoriesController::class, 'update'])->name('admin.suppliers_categories.update');
    Route::get('/suppliers_categories/delete/{id}', [SupplierCategoriesController::class, 'delete'])->name('admin.suppliers_categories.delete');
    /********************************* End suppliers_categories *********************************/


    /********************************* Start supplier *********************************/
    Route::get('/supplier/index', [SuppliersController::class, 'index'])->name('admin.supplier.index');
    Route::get('/supplier/create', [SuppliersController::class, 'create'])->name('admin.supplier.create');
    Route::post('/supplier/store', [SuppliersController::class, 'store'])->name('admin.supplier.store');
    Route::get('/supplier/edit/{id}', [SuppliersController::class, 'edit'])->name('admin.supplier.edit');
    Route::post('/supplier/update/{id}', [SuppliersController::class, 'update'])->name('admin.supplier.update');
    Route::get('/supplier/delete/{id}', [SuppliersController::class, 'delete'])->name('admin.supplier.delete');
    Route::post('/supplier/ajax_search', [SuppliersController::class, 'ajax_search'])->name('admin.supplier.ajax_search');
    Route::get('/supplier/show/{id}', [SuppliersController::class, 'show'])->name('admin.supplier.show');
    /********************************* End supplier *********************************/


    /********************************* End suppliers_orders *********************************/
    Route::get('/suppliers_orders/index', [Suppliers_with_ordersController::class, 'index'])->name('admin.suppliers_orders.index');
    Route::get('/suppliers_orders/create', [Suppliers_with_ordersController::class, 'create'])->name('admin.suppliers_orders.create');
    Route::post('/suppliers_orders/store', [Suppliers_with_ordersController::class, 'store'])->name('admin.suppliers_orders.store');
    Route::get('/suppliers_orders/edit/{id}', [Suppliers_with_ordersController::class, 'edit'])->name('admin.suppliers_orders.edit');
    Route::post('/suppliers_orders/update/{id}', [Suppliers_with_ordersController::class, 'update'])->name('admin.suppliers_orders.update');
    Route::get('/suppliers_orders/delete/{id}', [Suppliers_with_ordersController::class, 'delete'])->name('admin.suppliers_orders.delete');
    Route::post('/suppliers_orders/ajax_search', [Suppliers_with_ordersController::class, 'ajax_search'])->name('admin.suppliers_orders.ajax_search');
    Route::get('/suppliers_orders/show/{id}', [Suppliers_with_ordersController::class, 'show'])->name('admin.suppliers_orders.show');
    Route::post('/suppliers_orders/get_item_uoms', [Suppliers_with_ordersController::class, 'get_item_uoms'])->name('admin.suppliers_orders.get_item_uoms');
    Route::post('/suppliers_orders/load_modal_add_details', [Suppliers_with_ordersController::class, 'load_modal_add_details'])->name('admin.suppliers_orders.load_modal_add_details');
    Route::post('/suppliers_orders/add_new_details', [Suppliers_with_ordersController::class, 'add_new_details'])->name('admin.suppliers_orders.add_new_details');
    Route::post('/suppliers_orders/reload_itemsdetials', [Suppliers_with_ordersController::class, 'reload_itemsdetials'])->name('admin.suppliers_orders.reload_itemsdetials');
    Route::post('/suppliers_orders/reload_parent_pill', [Suppliers_with_ordersController::class, 'reload_parent_pill'])->name('admin.suppliers_orders.reload_parent_pill');
    Route::post('/suppliers_orders/load_edit_item_details', [Suppliers_with_ordersController::class, 'load_edit_item_details'])->name('admin.suppliers_orders.load_edit_item_details');
    Route::post('/suppliers_orders/edit_item_details', [Suppliers_with_ordersController::class, 'edit_item_details'])->name('admin.suppliers_orders.edit_item_details');
    Route::get('/suppliers_orders/delete_details/{id}/{id_parent}', [Suppliers_with_ordersController::class, 'delete_details'])->name('admin.suppliers_orders.delete_details');
    Route::post('/suppliers_orders/do_approve/{id}', [Suppliers_with_ordersController::class, 'do_approve'])->name('admin.suppliers_orders.do_approve');
    Route::post('/suppliers_orders/load_modal_approve_invoice', [Suppliers_with_ordersController::class, 'load_modal_approve_invoice'])->name('admin.suppliers_orders.load_modal_approve_invoice');
    Route::post('/suppliers_orders/load_usershiftDiv', [Suppliers_with_ordersController::class, 'load_usershiftDiv'])->name('admin.suppliers_orders.load_usershiftDiv');
    /********************************* End suppliers_orders *********************************/


    /********************************* Start admins_accounts *********************************/
    Route::get('/admins_accounts/index', [AdminController::class, 'index'])->name('admin.admins_accounts.index');
    Route::get('/admins_accounts/create', [AdminController::class, 'create'])->name('admin.admins_accounts.create');
    Route::post('/admins_accounts/store', [AdminController::class, 'store'])->name('admin.admins_accounts.store');
    Route::get('/admins_accounts/edit/{id}', [AdminController::class, 'edit'])->name('admin.admins_accounts.edit');
    Route::post('/admins_accounts/update/{id}', [AdminController::class, 'update'])->name('admin.admins_accounts.update');
    Route::post('/admins_accounts/ajax_search', [AdminController::class, 'ajax_search'])->name('admin.admins_accounts.ajax_search');
    Route::get('/admins_accounts/details/{id}', [AdminController::class, 'details'])->name('admin.admins_accounts.details');
    Route::get('/admins_accounts/Add_treasuries_delivery/{id}', [AdminController::class, 'Add_treasuries_delivery'])->name('admin.admins_accounts.Add_treasuries_delivery');
    Route::post('/admins_accounts/Add_treasuries_To_Admin/{id}', [AdminController::class, 'Add_treasuries_To_Admin'])->name('admin.admins_accounts.Add_treasuries_To_Admin');
    Route::get('/admins_accounts/delete_treasuries_delivery/{id}', [AdminController::class, 'delete_treasuries_delivery'])->name('admin.admins_accounts.delete_treasuries_delivery');
    /********************************* End admins_accounts *********************************/


    /********************************* Start admin_shift *********************************/
    Route::get('/admin_shift/index', [Admins_ShiftsContoller::class, 'index'])->name('admin.admin_shift.index');
    Route::get('/admin_shift/create', [Admins_ShiftsContoller::class, 'create'])->name('admin.admin_shift.create');
    Route::post('/admin_shift/store', [Admins_ShiftsContoller::class, 'store'])->name('admin.admin_shift.store');
    /********************************* End admin_shift *********************************/


    /********************************* Start collect_transaction *********************************/
    Route::get('/collect_transaction/index', [CollectController::class, 'index'])->name('admin.collect_transaction.index');
    Route::get('/collect_transaction/create', [CollectController::class, 'create'])->name('admin.collect_transaction.create');
    Route::post('/collect_transaction/store', [CollectController::class, 'store'])->name('admin.collect_transaction.store');
    /********************************* End collect_transaction *********************************/


    /********************************* Start exchange_transaction *********************************/
    Route::get('/exchange_transaction/index', [ExchangeController::class, 'index'])->name('admin.exchange_transaction.index');
    Route::get('/exchange_transaction/create', [ExchangeController::class, 'create'])->name('admin.exchange_transaction.create');
    Route::post('/exchange_transaction/store', [ExchangeController::class, 'store'])->name('admin.exchange_transaction.store');
    /********************************* End exchange_transaction *********************************/


    /********************************* Start SalesInvoices *********************************/
    Route::get('/SalesInvoices/index', [SalesInvoicesController::class, 'index'])->name('admin.SalesInvoices.index');
    Route::get('/SalesInvoices/create', [SalesInvoicesController::class, 'create'])->name('admin.SalesInvoices.create');
    Route::post('/SalesInvoices/store', [SalesInvoicesController::class, 'store'])->name('admin.SalesInvoices.store');
    Route::get('/SalesInvoices/edit/{id}', [SalesInvoicesController::class, 'edit'])->name('admin.SalesInvoices.edit');
    Route::post('/SalesInvoices/update/{id}', [SalesInvoicesController::class, 'update'])->name('admin.SalesInvoices.update');
    Route::get('/SalesInvoices/delete/{id}', [SalesInvoicesController::class, 'delete'])->name('admin.SalesInvoices.delete');
    Route::get('/SalesInvoices/show/{id}', [SalesInvoicesController::class, 'show'])->name('admin.SalesInvoices.show');
    Route::post('/SalesInvoices/get_item_uoms', [SalesInvoicesController::class, 'get_item_uoms'])->name('admin.SalesInvoices.get_item_uoms');
    Route::post('/SalesInvoices/get_item_batches', [SalesInvoicesController::class, 'get_item_batches'])->name('admin.SalesInvoices.get_item_batches');
    Route::post('/SalesInvoices/get_item_unit_price', [SalesInvoicesController::class, 'get_item_unit_price'])->name('admin.SalesInvoices.get_item_unit_price');
    Route::post('/SalesInvoices/get_Add_new_item_row', [SalesInvoicesController::class, 'get_Add_new_item_row'])->name('admin.SalesInvoices.get_Add_new_item_row');
    Route::post('/SalesInvoices/load_modal_addMirror', [SalesInvoicesController::class, 'load_modal_addMirror'])->name('admin.SalesInvoices.load_modal_addMirror');
    Route::post('/SalesInvoices/load_modal_addActiveInvoice', [SalesInvoicesController::class, 'load_modal_addActiveInvoice'])->name('admin.SalesInvoices.load_modal_addActiveInvoice');
    Route::post('/SalesInvoices/store', [SalesInvoicesController::class, 'store'])->name('admin.SalesInvoices.store');
    Route::post('/SalesInvoices/load_invoice_update_modal', [SalesInvoicesController::class, 'load_invoice_update_modal'])->name('admin.SalesInvoices.load_invoice_update_modal');
    Route::post('/SalesInvoices/Add_item_to_invoice', [SalesInvoicesController::class, 'Add_item_to_invoice'])->name('admin.SalesInvoices.Add_item_to_invoice');
    Route::post('/SalesInvoices/reload_items_in_invoice', [SalesInvoicesController::class, 'reload_items_in_invoice'])->name('admin.SalesInvoices.reload_items_in_invoice');
    Route::post('/SalesInvoices/recalclate_parent_invoice', [SalesInvoicesController::class, 'recalclate_parent_invoice'])->name('admin.SalesInvoices.recalclate_parent_invoice');
    Route::post('/SalesInvoices/remove_active_row_item', [SalesInvoicesController::class, 'remove_active_row_item'])->name('admin.SalesInvoices.remove_active_row_item');
    Route::post('/SalesInvoices/DoApproveInvoiceFinally', [SalesInvoicesController::class, 'DoApproveInvoiceFinally'])->name('admin.SalesInvoices.DoApproveInvoiceFinally');
    Route::post('/SalesInvoices/load_usershiftDiv', [SalesInvoicesController::class, 'load_usershiftDiv'])->name('admin.SalesInvoices.load_usershiftDiv');
    Route::post('/SalesInvoices/load_invoice_details_modal', [SalesInvoicesController::class, 'load_invoice_details_modal'])->name('admin.SalesInvoices.load_invoice_details_modal');
    Route::post('/SalesInvoices/ajax_search', [SalesInvoicesController::class, 'ajax_search'])->name('admin.SalesInvoices.ajax_search');
    Route::post('/SalesInvoices/do_add_new_customer', [SalesInvoicesController::class, 'do_add_new_customer'])->name('admin.SalesInvoices.do_add_new_customer');
    Route::post('/SalesInvoices/get_last_added_customer', [SalesInvoicesController::class, 'get_last_added_customer'])->name('admin.SalesInvoices.get_last_added_customer');
    Route::post('/SalesInvoices/searchforcustomer', [SalesInvoicesController::class, 'searchforcustomer'])->name('admin.SalesInvoices.searchforcustomer');
    Route::post('/SalesInvoices/searchforitems', [SalesInvoicesController::class, 'searchforitems'])->name('admin.SalesInvoices.searchforitems');
    Route::get('/SalesInvoices/printsaleswina4/{id}/{size}', [SalesInvoicesController::class, 'printsaleswina4'])->name('admin.SalesInvoices.printsaleswina4');
    /********************************* End SalesInvoices *********************************/

});

