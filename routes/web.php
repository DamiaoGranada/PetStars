 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'Home'])->name('gm.Home');

Route::get('/apoios', [PageController::class,'apoios'])->name('gm.apoios');

Route::get('/adocao', [PageController::class,'adocao'])->name('gm.adocao');

Route::get('/faq', [PageController::class,'faq'])->name('gm.faq');

Route::get('/contactos', [PageController::class,'contactos'])->name('gm.contactos');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['register' => false, 'verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/users/{user}/send_reactivate_mail',
    [UserController::class,'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::resource('posts',PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('users',UserController::class);
   });