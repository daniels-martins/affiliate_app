<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
   /**
    * Handle the User "created" event.
    */
   public function created(User $user): void
   {
      // generate a ref code for the user using the last three letters of their username
      $generatedCode = uniqid(substr($user->name, -3, 3));
      while ($this->duplicateRefCode($generatedCode)) $this->created($user);
      $user->ref_code = $generatedCode;
      $user->save(); //save to db


   }

   /**
    * Handle the User "updated" event.
    */
   public function updated(User $user): void
   {
      //
   }

   /**
    * Handle the User "deleted" event.
    */
   public function deleted(User $user): void
   {
      //
   }

   /**
    * Handle the User "restored" event.
    */
   public function restored(User $user): void
   {
      //
   }

   /**
    * Handle the User "force deleted" event.
    */
   public function forceDeleted(User $user): void
   {
      //
   }


   public function duplicateRefCode(String $ref_code): bool
   {
      return ((bool) User::where('ref_code', $ref_code)->first());
   }
}
