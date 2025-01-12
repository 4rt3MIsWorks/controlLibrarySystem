    <?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\StudentController;
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




    Route::get('/cadastro', function () {
        return view('site.cadastro');
    })->name('cadastro');

    Route::get('/listagem', function () {
        return view('site.listagem');
    })->name('listagem');

Route::resource('autor', AuthorController::class);
Route::resource('livros', BookController::class);
Route::resource('alunos', StudentController::class);
Route::resource('emprestimos', LoanController::class);
Route::resource('biblioteca', LibraryController::class);
