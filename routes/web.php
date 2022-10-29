<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CateItemController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;



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
    Route::post('/getcateitem',[ClientController::class,'getCateItemByCate'])->name('getCateItemByCate');
    Route::get('product/{id}',[ClientController::class,'getProById'])->name('getProById');
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
});



Route::get('/checkout', function () {
    return view('client/checkout');
});

Route::get('/single-blog', function () {
    return view('client/single-blog');
});
Route::get('/single-product', function () {
    return view('client/product');
});
Route::get('/dk', function () {
    return view('client/pages/register');
});
Route::get('/tracking', function () {
    return view('client/tracking');
});
Route::get('cateItems',[ProductController::class,'loadCateItem'])->name('CateItems');
// admin
Route::prefix('admin')->middleware('checkAdmin')->group(function () {
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
    Route::prefix('comments')->group(function () {
        Route::get('index',[CommentController::class,'index'])->name('listCom');
        Route::get('delete/{id}',[CommentController::class,'destroy'])->name('deleteCom');
        Route::get('/index1',[CommentController::class,'index1'] )->name('search1');
        Route::get('/index2',[CommentController::class,'index2'] )->name('search2');
        Route::get('/index3',[CommentController::class,'index3'] )->name('search3');

    }); 
    Route::prefix('users')->group(function () {
        Route::get('index',[UserController::class,'index'])->name('listUser');
        Route::get('index5',[UserController::class,'index5'])->name('listUserAd');

        Route::get('show/{id}',[UserController::class,'show'])->name('showUser');
        Route::post('update',[UserController::class,'update'])->name('updateUser');
        Route::get('block/{id}',[UserController::class,'block'])->name('blockUser');



        Route::get('delete/{id}',[UserController::class,'destroy'])->name('deleteUser');


        Route::get('/index4',[UserController::class,'index4'] )->name('search4');

    });

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
