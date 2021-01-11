<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use URL;

class activity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		
	if(strpos(URL::current(),'admins') !== false || strpos(URL::current(),'edit') !== false || strpos(URL::current(),'home') !== false || strpos(URL::current(),'login') !== false || strpos(URL::current(),'register') !== false || strpos(URL::current(),'logout') !== false || strpos(URL::current(),'translations') !== false || strpos(URL::current(),'lang') !== false || empty(str_replace(env('APP_URL'),'',URL::current()))){}else	{		
	activity()
  ->causedByAnonymous()
   ->withProperties(['type' => 'Page_Visit'])
   ->log(str_replace(env('APP_URL'),'',URL::current()));
		
	}
		
        return $next($request);
    }
}
