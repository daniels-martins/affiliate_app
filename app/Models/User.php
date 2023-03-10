<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'name',
      'email',
      'password',
      'super_code',
   ];

   /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];


   //  helpers
   public function getDownlines()
   {
      // we're getting only the id cos we don't want to dump all data from the db pertaining to the downline
      $downlineQuery = User::where('super_code', $this->ref_code)->get();
      // dd($downlineQuery, $this->name);
      return $downlineQuery->count() > 0 ? $downlineQuery : null;
   }

   public function getDownlinesCreatedIn($time = 'today')
   {
      $downlinesQuery = User::where('super_code', $this->ref_code);
      match ($time) {
         'this month', 'month' => $downlinesQuery = $downlinesQuery->whereMonth('created_at', date('m')),
         'this week', 'week' => $downlinesQuery = $downlinesQuery->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]),
         'this day', 'day', 'today' => $downlinesQuery = $downlinesQuery->whereDay('created_at', now()->day)
      };
      // we're getting only the id cos we don't want to dump all data from the db pertaining to the downline
      $downlines = $downlinesQuery->get();
      // dd($downlines);

      return $downlines->count() > 0 ? $downlines : null;
   }

   public function hasADownline(): User|null
   {
      $downlineExists = User::where('super_code', $this->ref_code)->first();
      return $downlineExists ?? null;
   }


   public function getUpline(string $attr = 'name')
   {
      $uplineQuery = User::where('ref_code', $this->super_code)->first();

      return $uplineQuery?->count() > 0 ? $uplineQuery->$attr : null;
   }

   public function makeAdmin()
   {
      $this->is_admin = true;
      $this->save();
   }
}
