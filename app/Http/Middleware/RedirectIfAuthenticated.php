<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Service\UserService;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $userRole = auth()->user()->role;
                return redirect(UserService::getDashboardRouteBasedOnUserRole($userRole));






            //if ($userRole === 'participant') {
                //return redirect()->route('participant.dashboard.index');
            //}

            //if ($userRole === 'organization') {
                //return redirect()->route('organization.dashboard.index');
            //}
        }
    }
        return $next($request);
    }
}
