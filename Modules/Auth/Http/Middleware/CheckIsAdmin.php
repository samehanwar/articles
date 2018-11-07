<?php

namespace Modules\Auth\Http\Middleware;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\Entities\User;
use Closure;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->is('auth/users') || $request->is('auth/role') || $request->is('auth/permission')){
            if(count(User::all()) > 0){
                  if(!Auth::user()->hasRole('Admin')){
                    \Session::flash('authorize','You are Not authorized to access this page');
                    return redirect('/unauthorize');
                  }
            }
        }
        return $next($request);
    }
}
