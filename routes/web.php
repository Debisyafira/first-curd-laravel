<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

route::get('/', [IndexController::class, 'index'])->name('user.index');
route::get('/edit/{id_users}', [IndexController::class, 'edit'])->name('user.edit');
route::post('/update/{id_users}', [IndexController::class, 'update'])->name('user.update');
route::get('/add', [IndexController::class, 'add'])->name('user.add'); //halaman
route::post('/store', [IndexController::class, 'store'])->name('user.store'); //proses simpan
route::get('/hapus/{id_users?}', [IndexController::class, 'hapus'])->name('user.hapus');
