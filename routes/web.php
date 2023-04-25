<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// AUTH
use App\Http\Controllers\Auth\AuthController;

// RESET PWD
use App\Http\Controllers\Auth\ForgotPasswordController;



// ADMIN
Route::get('Admin', [MasterController::class, 'adminview'])->name('adminview');

// LOGIN
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post')->middleware(['guest']);
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('client', [AuthController::class, 'clientview'])->name('clientview');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// RESET
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');




// Gestion des catégories

// Gestion des produits

// Gestion des clients

// Gestion des commandes

// Import

// Export


// Imprimer


// Envoyer Emails




Route::get('/categorie/{id}', [MasterController::class,'Prod'])->name('cat.show');

// Gestion Categories


Route::get('/Admin/GestionCategories', [MasterController::class,'gestionCat'])->name("gestioncategories");

Route::get('/', [MasterController::class,'slash'])->name("home");




// GESTION (ALL)
Route::get('/Admin/{gestion}',  [MasterController::class,'Gestion'])->name('gestion');


// EXPORT DATA EXCEL
Route::get('data', [MasterController::class, 'exportproduit'])->name('getdata');

// IMPORT DATA CSV
Route::post('putdata', [MasterController::class, 'importproduits'])->name('putdata');


// CART GUEST
Route::get('atcg', [MasterController::class, 'addtocartguest'])->name('addtocartguest');


// ADD TO CART
Route::get('atc', [MasterController::class, 'addtocart'])->name('addtocart');


// CLIENT PRODUCT
Route::get('client/products', [MasterController::class, 'cltproducts'])->name('cltproducts');

// CLIENT CART
Route::get('client/carts', [MasterController::class, 'cltcart'])->name('cltcart');

// PASS COMMANDE
Route::get('client/commande/', [MasterController::class, 'commande'])->name('commande');


//  COMMANDE  HISTORIE
Route::get('client/commandes', [MasterController::class, 'cltcommande'])->name('cltcommande');

// ANNULLER COMMANDE
Route::get('/client/annuler/{commande}',  [MasterController::class,'annulercmd'])->name('annulercommande');

// FACTURES
Route::get('factures', [MasterController::class, 'generate'])->name('generate');
