<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CateItemController;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

>>>>>>> Stashed changes


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


Route::get('/cart', function () {
    return view('client/cart');
});
Route::prefix('/')->group(function () {
    Route::get('/',[ClientController::class,'index'] )->name('index');
    Route::get('/category/{id}',[ClientController::class,'getProByCate'])->name('getProByCate');
    Route::get('/cateitem/{id}',[ClientController::class,'getProByCateItem'])->name('getProByCateItem');
    Route::get('product/{id}',[ClientController::class,'getProById'])->name('getProById');
<<<<<<< Updated upstream
=======
    Route::get('contact',[ClientController::class,'contact'] )->name('contact');
    Route::get('signup',[ClientController::class,'signup'] )->name('signup');
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->middleware('guest')->name('password.request');
    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);
     
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    })->middleware('guest')->name('password.email');
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->middleware('guest')->name('password.reset');
    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    })->middleware('guest')->name('password.update');
    Route::get('forgotpassword',[ClientController::class,'forgotpassword'] )->name('forgotpassword');
    Route::get('manager',[ClientController::class,'manager'] )->name('manager');


    Route::get('edit_profile',[UserController::class,'edit_profile'] )->name('edit_profile');
    Route::post('updateAccount',[UserController::class,'updateAccount'] )->name('updateAccount');

    Route::get('/search',[ClientController::class,'search'] )->name('search');
    Route::post('/product/comment/{id}',[ClientController::class,'store'])->name('store');
>>>>>>> Stashed changes
});
Route::get('/checkout', function () {
    return view('client/checkout');
});
Route::get('/contact', function () {
    return view('client/contact');
});
Route::get('/single-blog', function () {
    return view('client/single-blog');
});
Route::get('/single-product', function () {
    return view('client/product');
});
Route::get('/tracking', function () {
    return view('client/tracking');
});
Route::get('cateItems',[ProductController::class,'loadCateItem'])->name('CateItems');
// admin
Route::prefix('admin')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('index',[ProductController::class,'index'])->name('listPro');
        Route::get('create',[ProductController::class,'createView'])->name('loadCreatePro');
        Route::post('cateItems',[ProductController::class,'loadCateItem'])->name('loadCateItems');
        Route::post('create',[ProductController::class,'create'])->name('createPro');
        Route::get('delete/{id}',[ProductController::class,'delete'])->name('deletePro');
        Route::get('edit/{id}',[ProductController::class,'loadEdit'])->name('loadEditPro');
        Route::post('edit',[ProductController::class,'edit'])->name('editPro');
    }); 
    Route::prefix('categories')->group(function () {
        Route::get('index', [CategoryController::class,'index'])->name('listCate');
        Route::post('create',[CategoryController::class,'create'])->name('createCate');
        Route::get('edit/{id}',[CategoryController::class,'loadEdit'])->name('loadEditCate');
        Route::post('edit', [CategoryController::class,'edit'])->name('editCate');
        Route::get('delete/{id}', [CategoryController::class,'delete'])->name('deleteCate');
    });
    Route::prefix('cateitems')->group(function () {
        Route::get('index/{id}',[CateItemController::class,'index'])->name('getCateItems');
        Route::post('create', [CateItemController::class,'create'])->name('createCateItem');
        Route::get('delete/{id}', [CateItemController::class,'delete'])->name('deleteCateItem');
        Route::get('edit/{id}',[CateItemController::class,'loadEdit'])->name('loadEditCateItem');
        Route::post('edit', [CateItemController::class,'edit'])->name('editCateItem');
    });
});
Route::get('/admin/products',[ProductController::class,'index']);
Route::get('/admin/pro', function () {
    return view('admin/pages/product');
});
Route::get('/register', function () {
    return view('client/pages/register');
});

