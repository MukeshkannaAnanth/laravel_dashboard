<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\StudentController;
Use App\Http\Controllers\EditStudentController;
Use App\Http\Controllers\LoginController;
Use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\NavbarController;
Use App\Http\Controllers\FooterController;
Use App\Http\Controllers\AddcustomerController;
Use App\Http\Controllers\CustomerController;
Use App\Http\Controllers\CompanyController;  
Use App\Http\Controllers\AddcompanyController;  
Use App\Http\Controllers\CompanyeditController;  
Use App\Http\Controllers\BillingController;  
Use App\Http\Controllers\BillinglistComponent; 
Use App\Http\Controllers\InsursencecardController; 
Use App\Http\Controllers\CarddetailsController; 
Use App\Http\Controllers\VegitableController; 
Use App\Http\Controllers\Add_DressproductComponent; 
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ImportexcelController;
use App\Http\Controllers\Billing_canController;


use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// route for urls------------------
Route::get('/studentdata',[StudentController::class,'index'])->name('student.mainform');

Route::get('/Dashboard',[DashboardController::class,'index'])->name('student.dashboard');

Route::get('importExport',[ImportexcelController::class,'index'])->name('excel');

Route::get('importExport',[ImportexcelController::class,'index'])->name('excel');


Route::get('/edit_student',[EditStudentController::class,'index'])->name('student.editst');

Route::get('/',[LoginController::class,'index'])->name('student.Login');

Route::get('/Register',[RegisterController::class,'index'])->name('student.register');

Route::get('/Dashboard',[DashboardController::class,'index'])->name('student.dashboard');

Route::get('/Product/{id}',[ProductController::class,'index'])->name('company.product');

Route::get('/navbar',[NavbarController::class,'index'])->name('student.navbar');
Route::get('/footer',[FooterController::class,'index'])->name('student.footer');
Route::get('/Customer/Add',[AddcustomerController::class,'index'])->name('customer.add');
Route::get('/Company/Add',[AddcompanyController::class,'index'])->name('company.add');
Route::get('/Billing',[BillingController::class,'index'])->name('billingproduct');

Route::get('/Customer/List',[CustomerController::class,'index'])->name('customer.list');
Route::get('/Edit/{id}', [EditStudentController::class,'index'])->name('edit.customerdataform'); 

Route::get('/Company/List', [CompanyController::class,'index'])->name('company.list'); 
Route::get('/Billing/List', [BillinglistComponent::class,'index'])->name('billinglist'); 
Route::get('/CompanyEdit/{id}', [CompanyeditController::class,'index'])->name('company.edit'); 

Route::get('/Insurence', [InsursencecardController::class,'index'])->name('debitcard'); 
Route::get('/Invoice/Histroy', [CarddetailsController::class,'index'])->name('carddetails'); 

Route::get('/Shop/Vegitable', [VegitableController::class,'index'])->name('vegitable'); 
Route::get('/Add/Dress', [Add_DressproductComponent::class,'index'])->name('texttile'); 
Route::get('/Add/Can', [Billing_canController::class,'index'])->name('billingcan'); 

Route::get('Add/canCustomer/',function(){
    return view('can_customer');
})->name('addcan_customer');

//Route::get('/Add/Dress', [Add_DressproductComponent::class,'index'])->name('texttile'); 
// route for function ---------------


Route::post('insertdata', [ImportexcelController::class,'insertexceldata'])->name('excelinsert');


Route::post('/login_user', [LoginController::class,'login'])->name('student.loginfunction');

Route::post('/login_user1', [LoginController::class,'loginuser'])->name('student.loginfunction1');

Route::post('/logout', [LoginController::class,'logout'])->name('student.logout');


Route::post('/add-student', [StudentController::class,'addStudent'])->name('student.add');

Route::post('/edit-student', [StudentController::class,'editStudent'])->name('student.edit');

Route::post('/update-student', [StudentController::class,'updateStudent'])->name('student.update');

Route::post('/fetch-student', [StudentController::class,'fetchdata'])->name('student.fetch');
Route::post('/fetch-customer', [AddcustomerController::class,'fetchdata'])->name('customer.fetch');
Route::post('/fetch-company', [CompanyController::class,'fetchcompany'])->name('company.fetch');

Route::post('/fetch-product', [CompanyController::class,'fetchproduct'])->name('product.fetch');
Route::post('/fetch-productlist', [ProductController::class,'fetchproductlist'])->name('productlist.fetch');
Route::post('/fetch-editproductlist', [ProductController::class,'fetcheditproductlist'])->name('editproductlist.fetch');

Route::post('/delete-student', [StudentController::class,'deletedata'])->name('student.delete');
Route::post('/delete-company', [CompanyeditController::class,'deletecompany'])->name('company.delete');
Route::post('/delete-customer', [AddcustomerController::class,'deletecustomer'])->name('customer.delete');
Route::post('/delete-product', [ProductController::class,'deleteproduct'])->name('product.delete');


Route::post('/add_customer', [AddcustomerController::class,'addcustomers'])->name('add.customerdata'); 
Route::post('/edit_customer', [AddcustomerController::class,'editcustomers'])->name('edit.customerdata'); 

Route::post('/add_billing', [BillingController::class,'addbilling'])->name('add.billing'); 
Route::post('/fetch_brand', [BillingController::class,'fetchbrand'])->name('fetchbrand'); 
Route::post('/fetch_brandproduct', [BillingController::class,'fetchbrand_product'])->name('fetchbrand_product'); 
Route::post('/fetch_productrate', [BillingController::class,'product_rate'])->name('fetchproductrate'); 


Route::post('/add_company', [CompanyController::class,'addcompany'])->name('add.company'); 
Route::post('/add_product', [ProductController::class,'addproducts'])->name('add.product'); 
Route::post('/edit_company', [CompanyeditController::class,'editcompany'])->name('edit.company');
Route::post('/edit_product', [ProductController::class,'editproduct'])->name('edit.product');

Route::post('/apply_debitcard', [InsursencecardController::class,'applycard'])->name('applycard'); 

Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

Route::post('/addtocart',[VegitableController::class,'AddtoCart'])->name('addtocart');

Route::post('/add_dress', [Add_DressproductComponent::class,'add_dress'])->name('address'); 
Route::post('/addcan', [Billing_canController::class,'addcans'])->name('addcansdata'); 
