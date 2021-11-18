 <?php

use Illuminate\Support\Facades\Route;

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