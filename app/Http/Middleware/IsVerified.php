<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;
//use Jrean\UserVerification\Exceptions\UserNotVerifiedException;

class IsVerified
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
       // return $next($request);

        if(! is_null($request->user()) && ! $request->user()->verified) {
             /*
              return response([
            'error' => [
                'code' => 'INSUFFICIENT_ROLE',
                'description' => 'You are not authorized to access this resource.',
            ],
        ], 401);

                */
             return response(view('vendor.laravel-user-verification.user-verification'));
        }

        return $next($request);

    }
}
