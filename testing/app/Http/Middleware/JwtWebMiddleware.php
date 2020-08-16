<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtWebMiddleware
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
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return redirect()->route('login')->withStatus('Token is Invalid');
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return redirect()->route('login')->withStatus('Token is Expired');
            } else {
                return redirect()->route('login')->withStatus('Authorization Token not found');
            }
        }
        return $next($request);
    }
}
