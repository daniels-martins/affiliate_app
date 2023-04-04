<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   use HasFactory;

   protected $fillable  = ['fname', 'lname', 'gender', 'address', 'city', 'country', 'postcode', 'about_me'];



   public function getFullName()
   {
      return $this->fname . ' ' . $this->lname;
   }
   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
