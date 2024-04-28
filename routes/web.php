<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\BarbermanController;
use App\Http\Controllers\BarbermanUserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\PelayananUserController;
use App\Http\Controllers\LogoutUserController;
use App\Http\Controllers\ProfileController;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Passport\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

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
// Route Home
// Route::middleware('auth')->group(function() {
 Route::get('/', HomeController::class);

 // Route pelayanan
 Route::resource('pelayanans', PelayananController::class);
 // Route::get('pelayanans', [PelayananController::class, 'index']);
 // Route::get('pelayanans/create', [PelayananController::class, 'create']);
 // Route::post('pelayanans', [PelayananController::class, 'store']);
 // Route::get('pelayanans/{id}/edit', [PelayananController::class, 'edit']);
 // Route::put('pelayanans/{id}', [PelayananController::class, 'update']);
 // Route::delete('pelayanans/{id}', [PelayananController::class, 'destroy']);

 // Route Barberman
 Route::resource('barbermen',BarbermanController::class);
 // Route::get('barbermen',[BarbermanController::class, 'index']);
 // Route::get('barbermen/create', [BarbermanController::class, 'create']);
 // Route::post('barbermen', [BarbermanController::class, 'store']);
 // Route::get('barbermen/{id}/edit', [BarbermanController::class, 'edit']);
 // Route::put('barbermen/{id}', [BarbermanController::class, 'update']);
 // Route::delete('barbermen/{id}', [BarbermanController::class, 'destroy']);
 
 // Route User
 Route::resource('users', UserController::class);
 // Route::get('users', [UserController::class, 'index']);
 // Route::get('users/createuser', [UserController::class, 'create']);
 // Route::post('users', [UserController::class, 'store']);
 // Route::get('users/{id}/edit', [UserController::class, 'edit']);
 // Route::put('users/{id}', [UserController::class, 'update']);
 // Route::delete('users/{id}', [UserController::class, 'destroy']);

 // Route Transaksi
 Route::get('transaksis', [TransaksiController::class, 'index']);
 Route::get('transaksis/newtransaksi', [TransaksiController::class, 'create']);
 Route::post('transaksis', [TransaksiController::class, 'store']);
 Route::post('transaksis/laporan', [TransaksiController::class, 'laporan'])->name('laporan');
 //edit
 Route::get('transaksis/{id}/edit', [TransaksiController::class, 'edit']);
 Route::put('transaksis/{id}', [TransaksiController::class, 'update']);
// });
Route::post('logout',LogoutController::class)->name('logout')->middleware('auth');

// login
Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store']);














Route::get('loginuser', [LoginUserController::class, 'index']);
Route::get('dashboard', DashboardController::class,);

Route::get('barbermenuser',[BarbermanUserController::class,'show']);
Route::get('barbermenuser/{id}/detail', [BarbermanUserController::class, 'detail']);

Route::post('pemesanan/tambah/', [PemesananController::class, 'create']);
Route::get('pemesanan/tambahSebelumJam', [PemesananController::class, 'createSebelumJam']);
Route::post('dashboard', [PemesananController::class, 'store']);

Route::get('pesanan/', [PesananController::class, 'index'])->name('pesanan');
Route::delete('pesanan/{id}', [PesananController::class, 'destroy']);
// Route::get('pesanan/detail',[PesananController::class,'detail']);
Route::get('pesanan/pesananku/{id}', [PesananController::class, 'pesananku'])->name('daftarpesanan');


Route::get('registeruser/', [RegisterUserController::class, 'create']);
Route::post('loginuser', [RegisterUserController::class, 'store']);

// Route::middleware('guest')->group(function () {
 Route::get('registeruser', [RegisterUserController::class, 'create'])->name('registeruser');
 Route::post('registeruser', [RegisterUserController::class, 'store']);
// });

Route::get('pelayananuser', [PelayananUserController::class, 'index']);
Route::get('pelayananuser/{id}/detail', [PelayananUserController::class, 'detail']);

Route::get('loginuser', [LoginUserController::class, 'create'])->name('loginuser')->middleware('guest');
Route::post('loginuser', [LoginUserController::class, 'store']);

Route::post('logout',LogoutUserController::class)->name('logout')->middleware('auth');

Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::get('profile/{id}', [ProfileController::class, 'index']);

// Route::get('barbermanuser', [BarbermanUserController::class, 'index']);
// Route::get('showbarbermanuser', BarbermanUserController::class, 'show');








//  laravel sanctum

// Route::post('/register', [AuthController::class, 'register']);
// Route::get('/setup', function(Request $request) {
//  $credentials = [
//   'email' =>'user2@gmail.com',
//   'password' => 'password',
//  ];
//  if (!Auth::attempt($credentials)) {
//   $user = new \App\Models\User();

//   $user->name = 'User2';
//   $user->email = $credentials['email'];
//   $user->password = Hash::make($credentials['password']);
//   $user->telepon = '089778667556';
//   $user->alamat = 'Banjarnegara';
//   $user->jenis_kelamin = 'Laki-laki';
//   $user->role ='User';
  
//   $user->save();
  
//   if(Auth::attempt($credentials)) {
//    // $user = Auth::user();
//    $token = $request->Auth::user()->createToken('basic-token')->plainTextToken;

//    return[
//     'token' => $token,
//    ];
//   }
//  }
// });
// Route::post('/tokens/create', function (Request $request) {
//  $token = $request->user()->createToken($request->token_name);
 
//  return ['token' => $token->plainTextToken];
// });