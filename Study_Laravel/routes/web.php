<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/articles/create', function () {
    return view('articles/create');
});

Route::post('/articles', function () {
    // 글이 비버있지 않고, 문자열이고, 255자를 넘으면 안된다.
    $body = $_POST['body'];

    // 비어있으면 이전으로 돌아가기
    if(!$body) {
        return redirect()->back(); 
    }

    if(!is_string($body)) {
        return redirect()->back(); 
    }

    if(strlen($body) > 255) {
        return redirect()->back(); 
    }
    return 'hello';
});