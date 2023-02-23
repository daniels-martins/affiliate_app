<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
   public function index()
   {
      // for admins
      return (auth()->user()->is_admin) ? view('admin.pagez.admin_dashboard') : view('dashboard');
   }
}
