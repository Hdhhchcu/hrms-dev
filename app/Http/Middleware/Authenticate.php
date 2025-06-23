<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

class Authenticate 
{
    public function handle($request, Closure $next,$role, $module, $action)
    {
        // echo $role;
        // echo $module;
        // echo $action;
        // exit;
        $user = auth()->user();
        if (!$user->hasPermission($role,$module,$action)){
            if($role!="Employee"){
                abort(403);
            }
        }

        return $next($request);
    }





    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return '/my-custom-login';
    //     }
    // }
}





// -------------------New Code -------------------------------------------------------------


// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;

// class Authenticate extends Middleware
// {
//     public function handle($request, Closure $next, ...$roles)
//     {
//         if (!Auth::check()) {
//             return redirect()->route('login');
//         }

//         $user = Auth::user();

//         if (!in_array($user->role->name, $roles)) {
//             abort(403, 'Unauthorized');
//         }

//         return $next($request);
//     }
// }
