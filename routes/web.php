<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
   return view('welcome');
})->name('welcome');

// for running artisan commands
Route::get('/artie/{cmd}', function () {
   try {
      Artisan::call(request()->cmd, ['--force' => true]);
   } catch (\Throwable $th) {
      dd('Oops! Error occured ', $th->getMessage());
   }
   dd('The [' . request()->cmd . '] Artisan command was successful');
})->name('artisan');


Route::get('tinker', function () {
   dd('tinker route');
})->name('tinker');


// view specific user
Route::get('users/{user}', function (Request $request, User $user) {
   !$user ? dd('user not found') : $reqUser = $user;
   return view('admin.pagez.users.show', compact('reqUser'));
})->name('users.show');

// get downlines associated with the user
Route::get('users/{user}/downlines', function (User $user) {
   $reqUser = $user;
   $all_downlines = $user->getDownlines();
   return view('admin.pagez.users.downlines', compact('all_downlines', 'reqUser'));
})->name('users.show.downlines');


// dashboard routes here

Route::get('/dashboard', [GeneralController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::view('admin_panel', 'admin.pagez.admin_dashboard')->name('admin_panel');


   Route::get('setup', function () {
      return view('admin.pagez.setup');
   })->name('setup');

   Route::get('table', function () {
      return view('admin.pagez.tables');
   })->name('table');

   // make admin
   // Route::get('admin/222903/make/{user}', function (User $user) {
   //    if (($user->id == auth()->user()->id)) {
   //       $user->makeAdmin();
   //       dd($user->name . ' is now an admin');
   //    }
   // })->name('make_admin');

   // view all users
   Route::get('users', function () {
      if (auth()->user()->is_admin) {
         $all_users = User::all();
         return view('admin.pagez.users.index', compact('all_users'));
      } else return back();
   })->name('users.index');
});

require __DIR__ . '/auth.php';
