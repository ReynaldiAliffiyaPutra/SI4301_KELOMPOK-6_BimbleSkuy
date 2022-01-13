<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\PengajarController;
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

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

Route::get('/', function () {return view('index');});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login/auth', [AuthController::class, 'auth']);
Route::get('/daftar', [AuthController::class, 'create']);
Route::post('/daftar/store', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);

$session = isset($_SESSION["isLogin"]) ? $_SESSION["isLogin"] : false;
if ($session == true) {
	if ($_SESSION["status"] == "usr") {
		Route::prefix('/student')->group(function () {
			Route::get('/home', [PagesController::class, 'home']);
			Route::get('/profile', [AuthController::class, 'profile']);
			Route::get('/program', function () {return view('student.program');});
			Route::get('/program/masih-newbie', function () {return view('student.program.newbie');});
			Route::get('/program/sudah-advance', function () {return view('student.program.advance');});
			Route::get('/program/jadi-developer', function () {return view('student.program.developer');});
			Route::get('/berlangganan', function () {return view('student.berlangganan');});
			Route::get('/berlangganan/invoice', [PaymentController::class, 'invoice']);
			Route::post('/berlangganan/metodepembayaran', [PaymentController::class, 'metodepembayaran']);
			Route::post('/berlangganan/account', [PaymentController::class, 'account']);
			Route::post('/berlangganan/createtrans', [PaymentController::class, 'createtrans']);
			Route::get('/berlangganan/done', function () {return view('student.payment.done');});
			Route::get('/riwayat-pembayaran', [PagesController::class, 'pembayaran']);
			Route::get('/guru', [PengajarController::class, 'index']);
			Route::get('/history', [PagesController::class, 'history']);
			Route::get('/materi', [PembelajaranController::class, 'index']);
			Route::get('/materi/{id}', [PembelajaranController::class, 'show']);
			Route::get('/layanan', [FeedbackController::class, 'create']);
			Route::post('/layanan/store', [FeedbackController::class, 'store']);
		});

	} elseif ($_SESSION["status"] == "adm") {
		Route::prefix('/admin')->group(function () {
			Route::get('/dashboard', [AdminPagesController::class, 'dashboard']);
			Route::get('/user', [AdminPagesController::class, 'user']);
			Route::get('/detail-user/{id}', [AdminPagesController::class, 'userdetail']);
			Route::get('/pembelajaran', [AdminPagesController::class, 'pembelajaran']);
			Route::get('/pembelajaran/add', [PembelajaranController::class, 'create']);
			Route::post('/pembelajaran/store', [PembelajaranController::class, 'store']);
			Route::get('/pembelajaran/edit/{id}', [PembelajaranController::class, 'edit']);
			Route::post('/pembelajaran/update/{id}', [PembelajaranController::class, 'update']);
			Route::get('/pembelajaran/delete/{id}', [PembelajaranController::class, 'destroy']);
			Route::get('/pengajar', [AdminPagesController::class, 'pengajar']);
			Route::get('/pengajar/add', [PengajarController::class, 'create']);
			Route::post('/pengajar/store', [PengajarController::class, 'store']);
			Route::get('/pengajar/edit/{id}', [PengajarController::class, 'edit']);
			Route::post('/pengajar/update/{id}', [PengajarController::class, 'update']);
			Route::get('/pengajar/delete/{id}', [PengajarController::class, 'destroy']);
			Route::get('/feedback', [FeedbackController::class, 'index']);
			Route::get('/feedback/{id}', [FeedbackController::class, 'show']);
		});

	} else {
		return redirect('/login');
	}
} else {
	return redirect('/login');
}
