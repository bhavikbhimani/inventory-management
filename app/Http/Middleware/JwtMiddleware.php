<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use JWTAuth;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class JwtMiddleware extends Middleware
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
                return response()->json(['status_code' => '401', 'message' => 'Token is Invalid'], 401);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['status_code' => '401', 'message' => 'Token is Expired'], 401);
            } else {
                return response()->json(['status_code' => '401', 'message' => 'Authorization Token not found'], 401);
            }
        }
        return $next($request);
    }
}
