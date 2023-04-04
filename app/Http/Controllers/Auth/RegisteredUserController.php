<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
   /**
    * Display the registration view.
    */
   public function create(): View
   {
      // ref refers to the referrral link of your upline : used when registration.
      return (request()->has('ref') and $super_code = request()->ref ?: null) ? view('auth.register', compact('super_code')) : view('auth.register');
   }

   /**
    * Handle an incoming registration request.
    *
    * @throws \Illuminate\Validation\ValidationException
    */
   public function store(Request $request): RedirectResponse
   {
      // dd($request->all());
      $validated  = $request->validate([
         'name'               =>       ['required', 'string', 'max:255'],
         'email'              =>       ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
         'password'           =>       ['required', 'confirmed', Rules\Password::defaults()],
         'super_code'         =>       ['sometimes', 'min:5', 'max:255'],
         'referrer'           =>       "required|min:3|max:20",
         'bank_name'          =>       "required|min:3|max:50",
         'bank_account_name'  =>       "required|min:3|max:50",
         'bank_account_num'   =>       "required|size:10",
      ]);

      // $user = User::create([
      //    'name' => $request->name,
      //    'email' => $request->email,
      //    'password' => Hash::make($request->password),
      //    'super_code' => $request->super_code ?? null,
      // ]);
      // dd($validated, $request->all());
      $user = User::create($validated);

      event(new Registered($user));

      Auth::login($user);

      return redirect(RouteServiceProvider::HOME);
   }
}
