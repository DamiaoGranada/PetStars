 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ApoiosController;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', [EventosController::class,'display'])->name('gm.Home');

Route::get('/apoios', [ApoiosController::class,'display'])->name('gm.apoios');

Route::get('/adocao', [AdocaoController::class,'display'])->name('gm.adocao');

Route::get('/faq', [PageController::class,'faq'])->name('gm.faq');

Route::get('/login', [PageController::class,'login'])->name('login');

Route::get('/register', [PageController::class,'register'])->name('register');

Route::get('/contactos', [PageController::class,'contactos'])->name('gm.contactos');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/users/{user}/send_reactivate_mail',
    [UserController::class,'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::resource('posts',PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('users',UserController::class);
   });


Route::get('/admin', [App\Http\Controllers\HomeController::class,'index'])->name('admin');


Auth::routes(['verify'=> True]);


Route::get('start-users-db', function() {
    User::create([
        'name' => 'Admin',
        'email' => 'admin@petstars.pt',
        'password' => Hash::make('123'),
        'apelido' => 'Admin',
        'nif' => '999999991',
        'funcao' => 'admin',
        'localidade' => 'Leiria',
        'cod_postal' => '0000-000',
        'rua' => 'Rua XPTO, 1',
        'telefone' => '911111111',
    ]);

    return redirect()->route('gm.Home');
});
