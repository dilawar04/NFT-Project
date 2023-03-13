<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\MintController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommingSoonController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\loginController;

//twitter
use App\Http\Controllers\TwitterAuth;
// Web3
use App\Http\Controllers\Web3\Web3AuthController;
use App\Http\Controllers\Web3\PinataController;
// Discord
use App\Http\Controllers\Discord\DiscordController;
// Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPagesController;


use Illuminate\Support\Facades\Route;

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

//users
Route::post('/user-login', [loginController::class, 'login']);
Route::post('/user-register', [loginController::class, 'register']);
Route::get('/user-logout', [loginController::class, 'logout']);


Route::get('/connect-discord', function(){
    return redirect('https://discord.com/api/oauth2/authorize?client_id=1057179221929250867&redirect_uri=https%3A%2F%2Fminting-nft.digiwised.com%2Fdiscord-auth&response_type=code&scope=identify%20email');
});
Route::get('/discord-auth', [DiscordController::class, 'login']);
Route::get('/discord-join', [DiscordController::class, 'follow']);

Route::get('/join-discord', function(){
    return redirect('https://discord.com/api/oauth2/authorize?client_id=1057179221929250867&permissions=469762049&redirect_uri=https%3A%2F%2Fminting-nft.digiwised.com%2Fdiscord-join&response_type=code&scope=bot%20identify');
});


Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return redirect()->back()->with('message',['status'=>'success','msg'=>'Cleared ..!']);
 
 });

Route::get('/mint-model', [MintController::class, 'mintModal']);
Route::get('/enter-rafale', [ProfileController::class, 'enterRafale']);


Route::get('/', [Web3AuthController::class, 'index']);
Route::get('/', [HomesController::class, 'index']);
Route::get('/mint', [MintController::class, 'index']);

Route::get('/collections', [CollectionController::class, 'index']);
Route::get('/collections/filter/{by}', [CollectionController::class, 'index']);

Route::get('/coming-soon', [CommingSoonController::class, 'index']);
Route::get('/404', [HomesController::class, 'error']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);

Route::get('/pre-sale', [MintController::class, 'preSale']);
Route::get('/public-sale', [MintController::class, 'publicSale']);

Route::get('/metamask-connected', function () {
    return view('scott/index');
})->middleware(['auth', 'verified'])->name('metamask-mask-has-login');



Route::get('/metamask-login', function () {
    if (Auth::check()) {
        return view('scott/index');
    }
    return view('scott/index');
});
Route::get('/index', function () {
    
    return view('scott/index');
});
Route::get('/disconnect', [Web3AuthController::class, 'disconnect']);
// Minting Pinata
Route::get('/mint-nft', [PinataController::class, 'mint_index']);
Route::get('/pinata-communicating', [PinataController::class, 'pinata_communicate'])->name('pinata.communicate');
Route::get('/pinata', [PinataController::class, 'pinata_communicating']);
Route::get('/pinata-ipfs', [PinataController::class, 'ipfshash']);

Route::get('/testing', [Web3AuthController::class, 'testing']);
Route::get('/eth/signature', [Web3AuthController::class, 'signature'])->name('metamask.signature');
Route::post('/eth/authenticate', [Web3AuthController::class, 'authenticate'])->name('metamask.authenticate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//fortmatic
Route::get('/eth/fortAuth', [Web3AuthController::class, 'fortAuth'])->name('formatic.auth');
require __DIR__.'/auth.php';

//twitter
Route::get('/twitter-auth',[TwitterAuth::class, 'Auth']);
Route::get('/twitter-follow',[TwitterAuth::class, 'follow']);
Route::post('/tweets',[TwitterAuth::class, 'tweets']);
///admin




Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['auth']],function(){

    Route::get('/',[AdminController::class, 'index']);
});


Route::get('/admin/task', [AdminPagesController::class, 'task']);

Route::get('/admin/add_task', [AdminPagesController::class, 'view_task']);

Route::get('/admin/edit_task/{id}', [AdminPagesController::class, 'edit']);

Route::post('/admin/edit_task/{id}', [AdminPagesController::class, 'update']);

Route::get('/admin/delete_task/{id}', [AdminPagesController::class, 'delete']);


Route::get('/export', [AdminController::class, 'export'])->name('export');
// blacklist User 
// Route::get('/admin/blacklist-user-add', [AdminController::class, 'blacklist_add']);
// whitelist update_list
Route::get('/admin/whitelist-user-add', [AdminController::class, 'whitelist_add']);
Route::get('/admin/whitelist-user-list/{id}', [AdminController::class, 'update_list']);
Route::get('/admin/one-thousand-whitelisted-user', [AdminController::class, 'one_thousand']);
Route::get('/admin/five-hundred-whitelisted-user', [AdminController::class, 'five_hundred']);
Route::get('/admin/whitelist-super-user', [AdminController::class, 'super_user']);
// Route::get('/whitelist-user-edit', [AdminController::class, 'edit']);
Route::post('/whitelist-user-add/{id}', [AdminController::class, 'store']);
// Route::get('/whitelist-user-add/delete/{id}', [AdminController::class, 'update']);
Route::get('/admin/edit_list/{id}', [AdminController::class, 'edit']);
Route::post('/admin/edit_list/{id}', [AdminController::class, 'update']);
Route::get('/admin/delete_list/{id}', [AdminController::class, 'deletes']);


Route::post('/admin/add_task', [AdminPagesController::class, 'add_task']);

// pre-sale work 
Route::get('/admin/pre-sale', [AdminPagesController::class, 'pre_sale']);
Route::get('/admin/add-pre-sale', [AdminPagesController::class, 'view_pre_sale']);
Route::post('/admin/store-pre-sale', [AdminPagesController::class, 'add_pre_sale']);
Route::get('/admin/edit_pre_sale/{id}', [AdminPagesController::class, 'edit_pre_sale']);
Route::post('/admin/edit_pre_sale/{id}', [AdminPagesController::class, 'update_pre_sale']);
Route::get('/admin/delete_sale/{id}', [AdminPagesController::class, 'delete_pre_sale']);

// Smart Contract
    Route::group(['prefix' => 'admin'], function(){
    Route::get('/smart-contract',[AdminPagesController::class, 'smart_contract']);
    Route::get('/smart-contract/add',[AdminPagesController::class, 'smart_contract_add']);
    Route::post('/smart-contract/add',[AdminPagesController::class, 'smart_contract_store']);
    Route::get('/smart-contract/edit/{id}',[AdminPagesController::class, 'smart_contract_edit']);
    Route::post('/smart-contract/edit/{id}',[AdminPagesController::class, 'smart_contract_update']);
    Route::get('/smart-contract/delete/{id}',[AdminPagesController::class, 'smart_contract_destroy']);
    Route::get('/smart-contract/{id}', [AdminPagesController::class, 'smart_contract_edit_ajax']);

});



// public sale work 
Route::get('/admin/public-sale', [AdminPagesController::class, 'public_sale']);
Route::get('/admin/add-public-sale', [AdminPagesController::class, 'view_public_sale']);
Route::post('/admin/store-pub-sale', [AdminPagesController::class, 'add_pub_sale']);
Route::get('/admin/edit_public_sale/{id}', [AdminPagesController::class, 'edit_pub_sale']);
Route::post('/admin/edit_public_sale/{id}', [AdminPagesController::class, 'update_pub_sale']);
Route::get('/admin/public-sale/{id}', [AdminPagesController::class, 'update_list']);
Route::get('/admin/delete_public_sale/{id}', [AdminPagesController::class, 'delete_pub_sale']);

// pdf download work 
// Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));
Route::get('/admin/downloadTxt', [AdminController::class, 'downloadTxt']);
Route::get('/admin/attach-file-add', [AdminPagesController::class, 'attach_file_add']);
Route::post('/admin/attach-file-add', [AdminPagesController::class, 'add_attach_file']);

Route::get('/admin/attach-smart-contract', [AdminController::class, 'attach_smart_cont']);
Route::post('/admin/attach-smart-contract-add', [AdminController::class, 'add_attach_smart_cont']);





