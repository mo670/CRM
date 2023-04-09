<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\homeController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\frontend\auth\AuthFrontController;
use App\Http\Controllers\backend\auth\AuthenticationController;
use App\Http\Controllers\backend\OrderController as BackendOrderController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\MessageController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\PackageController as FrontendPackageController;

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

    //frontent routes



    Route::get('/',[FrontendHomeController::class,'home'])->name('home');
    Route::get('/login',[AuthFrontController::class,'login'])->name('login');
    Route::post('/register',[AuthFrontController::class,'register'])->name('register');
    Route::post('/login-submit',[AuthFrontController::class,'loginSubmit'])->name('loginSubmit');

    Route::get('/packages',[FrontendPackageController::class,'allPackages'])->name('allPackages');
    Route::group(['middleware'=>'customer'],function(){
        Route::get('/logout',[AuthFrontController::class,'logout'])->name('customer.logout');
        Route::get('/profile',[AuthFrontController::class,'profile'])->name('profile');
        Route::post('/profile-update/{id}',[AuthFrontController::class,'profileUpdate'])->name('profile-update');


        // order package
        Route::get('/do-order/cus_id={cus_id}/pack_id={pack_id}',[OrderController::class,'doOrder'])->name('order');
        Route::get('/myOrders',[OrderController::class,'myOrders'])->name('myOrders');

        Route::get('/order-payment/order_id={order_id}',[OrderController::class,'orderPayment'])->name('orderPayment');

        Route::get('/make-payment/order_id={order_id}/cust_id={cust_id}',[OrderController::class,'makePayment'])->name('makepayment');
        Route::get('/single-order/cust_id={cust_id}',[OrderController::class,'viewSingleOrder'])->name('viewSingleOrder');

        // message to admin

        Route::get('/message-page',[MessageController::class,'messagePage'])->name('message');
        Route::post('/message-send',[MessageController::class,'messageSend'])->name('messageSend');
    });
    









//backend ROUTE
Route::group(['prefix' => 'app'], function () {
    Route::get('/loginpage', [AuthenticationController::class, 'loginpage'])->name('login.page');
    Route::post('/submitlogin', [AuthenticationController::class, 'submitlogin'])->name('submit.login');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

        // CUSTOMER ROUTE STARTS HERE
        Route::get('/', [homeController::class, 'home'])->name('dashboard');
        Route::get('/customer-form', [CustomerController::class, 'addcustomer'])->name('customer.add');
        Route::post('/createcustomer', [CustomerController::class, 'createCustomer'])->name('customer.create');
        Route::get('/all-customer', [CustomerController::class, 'allcustomer'])->name('customer.all');
        Route::get('/edit-customer/{id}', [CustomerController::class, 'editCustomer'])->name('customer.edit');
        Route::put('/update-customer/{id}', [CustomerController::class, 'updateCustomer'])->name('customer.update');
        Route::get('/delete-customer/{id}', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');

        Route::get('/customer/user_id={user_id}', [CustomerController::class, 'seeOrders'])->name('seeOrders');
        // CUSTOMER ROUTE ENDS HERE

        // PACKAGE ROUTE STARTS HERE
        Route::get('/addpackage', [PackageController::class, 'addpackage'])->name('package.add');
        Route::post('/create-package', [PackageController::class, 'createPackage'])->name('package.create');
        Route::get('/all-package', [PackageController::class, 'allpackage'])->name('package.all');
        Route::get('/edit-package/{id}', [PackageController::class, 'editPackage'])->name('package.edit');
        Route::put('/update-package/{id}', [PackageController::class, 'updatePackage'])->name('package.update');
        Route::get('/delete-package/{id}', [PackageController::class, 'deletePackage'])->name('package.delete');
        // PACKAGE ROUTE ENDS HERE


        // Message Section
        Route::get('/see-all-messages',[MessageController::class, 'seeAllMessages'])->name('message.all');
        Route::get('/view-messages/cust_id={cust_id}',[MessageController::class, 'viewMessages'])->name('view.message');
        Route::put('/reply-messages/cust_id={cust_id}',[MessageController::class, 'replyMessages'])->name('reply.message');


        // Order Section

        Route::get('/orders',[BackendOrderController::class, 'orders'])->name('orders.all');
        Route::get('/approved-orders',[BackendOrderController::class, 'approvedOrders'])->name('orders.approved');
        Route::get('/orders-approve/orderID={orderID}/cust_id={custID}',[BackendOrderController::class, 'orderStatus'])->name('orders.status');
        Route::get('/orders-pending/orderID={orderID}/cust_id={custID}',[BackendOrderController::class, 'orderStatuschange'])->name('orders.pending');

        Route::get('paid-orders',[BackendOrderController::class, 'paidOrders'])->name('orders.paid');

        // Reports
        Route::get('new-order-report',[BackendOrderController::class, 'newOrderReport'])->name('newOrderReport');
        Route::get('generate-new-order-report',[BackendOrderController::class, 'generateRewOrderReport'])->name('generateRewOrderReport');
        

        Route::get('sell-order-report',[BackendOrderController::class, 'sellOrderReport'])->name('sellOrderReport');
        Route::get('generate-sell-order-report',[BackendOrderController::class, 'generateSellOrderReport'])->name('generateSellOrderReport');
        
    });
});
