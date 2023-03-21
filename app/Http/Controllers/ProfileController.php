<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
   /**
    * Display the user's profile form.
    */
   public function edit(Request $request): View
   {
      return ($request->user()->is_admin) ? view('admin.pagez.setup') : view('profile.edit', ['user' => $request->user()]);
   }

   /**
    * Update the user's profile information.
    */
   public function update(ProfileUpdateRequest $request): RedirectResponse
   {
      // dd($request->all(), $request->validated());
      $request->user()->fill($request->validated());
      $validatedFieldsForProfile = collect($request->validated())->except('name', 'email')->toArray();
      $request->user()->profile()->update($validatedFieldsForProfile);

      if ($request->user()->isDirty('email'))   $request->user()->email_verified_at = null;

      $request->user()->push();
      // dd($request->all(), $request->user(),  $request->user()->profile->about_me);

      return Redirect::back()->with('status', 'profile-updated');
   }

   /**
    * Delete the user's account.
    */
   public function destroy(Request $request): RedirectResponse
   {
      $request->validateWithBag('userDeletion', [
         'password' => ['required', 'current-password'],
      ]);

      $user = $request->user();

      Auth::logout();

      $user->delete();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return Redirect::to('/');
   }
}
