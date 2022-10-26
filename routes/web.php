<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactSiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
 ====|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [AuthController::class, 'authenticate'])->middleware('guest');

Route::middleware('auth')->group(function(){
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    
    Route::resource('/admin/master_project', ProjectController::class);
    Route::get('/admin/master_project/{id}/create', [ProjectController::class, 'show_form_create']);
    
    Route::resource('/admin/master_siswa', SiswaController::class);
    
    Route::resource('/admin/master_kontak', ContactSiswaController::class);
    Route::get('/admin/master_kontak/{id}/create_contact_siswa', [ContactSiswaController::class, 'show_siswa']);
    Route::get('/admin/master_kontak/{contact_id}/create/{id}', [ContactSiswaController::class, 'form_contact_siswa']);
    Route::get('/admin/master_kontak/contact_siswa/{id}/edit', [ContactSiswaController::class, 'edit_contact_siswa']);
    Route::post('/admin/master_kontak/siswa', [ContactSiswaController::class, 'store_contact_siswa']);
    Route::put('/admin/master_kontak/contact_siswa/{id}', [ContactSiswaController::class, 'update_contact_siswa']);
    Route::delete('/admin/master_kontak/contact_siswa/{id}', [ContactSiswaController::class, 'delete_contact_siswa']);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/contact_me', function () {
    return view('contact_me');
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
