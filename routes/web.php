<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');

Route::prefix('front')->group(function () {
    Route::post('/check_pasien', [App\Http\Controllers\FrontController::class, 'check_pasien'])->name('front_check_pasien');
    Route::get('edit_diagnosa/{id_pasien?}', [App\Http\Controllers\FrontController::class, 'edit_diagnosa'])->name('front_edit_diagnosa');

    Route::post('/store_diagnosa_detail', [App\Http\Controllers\FrontController::class, 'store_diagnosa_detail'])->name('front_store_diagnosa_detail');
    Route::post('/start_diagnosa_detail', [App\Http\Controllers\FrontController::class, 'start_diagnosa_detail'])->name('front_start_diagnosa_detail');
    Route::delete('/destroy_diagnosa_detail/{id}', [App\Http\Controllers\FrontController::class, 'destroy_diagnosa_detail'])->name('front_destroy_diagnosa_detail');
    Route::get('/print_diagnosa/{id}', [App\Http\Controllers\FrontController::class, 'print_diagnosa'])->name('front_print_diagnosa');
});

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_user::class, 'index'])->name('user_index');
    Route::get('/create', [App\Http\Controllers\C_user::class, 'create'])->name('user_create');
    Route::post('/store', [App\Http\Controllers\C_user::class, 'store'])->name('user_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_user::class, 'edit'])->name('user_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_user::class, 'update'])->name('user_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_user::class, 'destroy'])->name('user_destroy');
});

Route::prefix('menu')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_menu::class, 'index'])->name('menu_index');
    Route::post('/firstmenu_store', [App\Http\Controllers\C_menu::class, 'firstmenu_store'])->name('menu_firstmenu_store');
    Route::post('/secondmenu_store', [App\Http\Controllers\C_menu::class, 'secondmenu_store'])->name('menu_secondmenu_store');
    Route::post('/thirdmenu_store', [App\Http\Controllers\C_menu::class, 'thirdmenu_store'])->name('menu_thirdmenu_store');
    Route::post('/fourthmenu_store', [App\Http\Controllers\C_menu::class, 'fourthmenu_store'])->name('menu_fourthmenu_store');

    Route::put('/firstmenu_update/{id}', [App\Http\Controllers\C_menu::class, 'firstmenu_update'])->name('menu_firstmenu_update');
    Route::put('/secondmenu_update/{id}', [App\Http\Controllers\C_menu::class, 'secondmenu_update'])->name('menu_secondmenu_update');
    Route::put('/thirdmenu_update/{id}', [App\Http\Controllers\C_menu::class, 'thirdmenu_update'])->name('menu_thirdmenu_update');
    Route::put('/fourthmenu_update/{id}', [App\Http\Controllers\C_menu::class, 'fourthmenu_update'])->name('menu_fourthmenu_update');

    Route::delete('/firstmenu_destroy/{id}', [App\Http\Controllers\C_menu::class, 'firstmenu_destroy'])->name('menu_firstmenu_destroy');
    Route::delete('/secondmenu_destroy/{id}', [App\Http\Controllers\C_menu::class, 'secondmenu_destroy'])->name('menu_secondmenu_destroy');
    Route::delete('/thirdmenu_destroy/{id}', [App\Http\Controllers\C_menu::class, 'thirdmenu_destroy'])->name('menu_thirdmenu_destroy');
    Route::delete('/fourthmenu_destroy/{id}', [App\Http\Controllers\C_menu::class, 'fourthmenu_destroy'])->name('menu_fourthmenu_destroy');

    Route::get('/firstmenu_list', [App\Http\Controllers\C_menu::class, 'firstmenu_list'])->name('menu_firstmenu_list');
    Route::get('/secondmenu_list', [App\Http\Controllers\C_menu::class, 'secondmenu_list'])->name('menu_secondmenu_list');
    Route::get('/thirdmenu_list', [App\Http\Controllers\C_menu::class, 'thirdmenu_list'])->name('menu_thirdmenu_list');
});

Route::prefix('level')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_level::class, 'index'])->name('level_index');
    Route::get('/create', [App\Http\Controllers\C_level::class, 'create'])->name('level_create');
    Route::post('/store', [App\Http\Controllers\C_level::class, 'store'])->name('level_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_level::class, 'edit'])->name('level_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_level::class, 'update'])->name('level_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_level::class, 'destroy'])->name('level_destroy');
});

Route::prefix('accessmenu')->middleware('auth')->group(function () {
    Route::get('/create/{id}', [App\Http\Controllers\C_accessmenu::class, 'create'])->name('accessmenu_create');
    Route::post('/store/{id}', [App\Http\Controllers\C_accessmenu::class, 'store'])->name('accessmenu_store');
});

Route::prefix('gejala')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_gejala::class, 'index'])->name('gejala_index');
    Route::get('/create', [App\Http\Controllers\C_gejala::class, 'create'])->name('gejala_create');
    Route::post('/store', [App\Http\Controllers\C_gejala::class, 'store'])->name('gejala_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_gejala::class, 'edit'])->name('gejala_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_gejala::class, 'update'])->name('gejala_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_gejala::class, 'destroy'])->name('gejala_destroy');
});

Route::prefix('penyakit')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_penyakit::class, 'index'])->name('penyakit_index');
    Route::get('/create', [App\Http\Controllers\C_penyakit::class, 'create'])->name('penyakit_create');
    Route::post('/store', [App\Http\Controllers\C_penyakit::class, 'store'])->name('penyakit_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_penyakit::class, 'edit'])->name('penyakit_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_penyakit::class, 'update'])->name('penyakit_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_penyakit::class, 'destroy'])->name('penyakit_destroy');
});

Route::prefix('aturan_diagnosa')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_aturan_diagnosa::class, 'index'])->name('aturan_diagnosa_index');
    Route::get('/create', [App\Http\Controllers\C_aturan_diagnosa::class, 'create'])->name('aturan_diagnosa_create');
    Route::post('/store', [App\Http\Controllers\C_aturan_diagnosa::class, 'store'])->name('aturan_diagnosa_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_aturan_diagnosa::class, 'edit'])->name('aturan_diagnosa_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_aturan_diagnosa::class, 'update'])->name('aturan_diagnosa_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_aturan_diagnosa::class, 'destroy'])->name('aturan_diagnosa_destroy');
});

Route::prefix('pasien')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_pasien::class, 'index'])->name('pasien_index');
    Route::get('/create', [App\Http\Controllers\C_pasien::class, 'create'])->name('pasien_create');
    Route::post('/store', [App\Http\Controllers\C_pasien::class, 'store'])->name('pasien_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_pasien::class, 'edit'])->name('pasien_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_pasien::class, 'update'])->name('pasien_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_pasien::class, 'destroy'])->name('pasien_destroy');
});

Route::prefix('diagnosa')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\C_diagnosa::class, 'index'])->name('diagnosa_index');
    Route::get('/create', [App\Http\Controllers\C_diagnosa::class, 'create'])->name('diagnosa_create');
    Route::post('/store', [App\Http\Controllers\C_diagnosa::class, 'store'])->name('diagnosa_store');
    Route::get('/edit/{id}', [App\Http\Controllers\C_diagnosa::class, 'edit'])->name('diagnosa_edit');
    Route::put('/update/{id}', [App\Http\Controllers\C_diagnosa::class, 'update'])->name('diagnosa_update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\C_diagnosa::class, 'destroy'])->name('diagnosa_destroy');

    Route::post('/store_diagnosa_detail', [App\Http\Controllers\C_diagnosa::class, 'store_diagnosa_detail'])->name('store_diagnosa_detail');
    Route::post('/start_diagnosa_detail', [App\Http\Controllers\C_diagnosa::class, 'start_diagnosa_detail'])->name('start_diagnosa_detail');
    Route::delete('/destroy_diagnosa_detail/{id}', [App\Http\Controllers\C_diagnosa::class, 'destroy_diagnosa_detail'])->name('destroy_diagnosa_detail');
    Route::get('/print/{id}', [App\Http\Controllers\C_diagnosa::class, 'print'])->name('diagnosa_print');
});
