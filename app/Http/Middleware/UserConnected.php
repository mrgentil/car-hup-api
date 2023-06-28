<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserConnected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (auth()->user()) {
                return $next($request);
            } else {
                return response()->json([

                    'message' => 'Access Denied .! You are not connected',
                ], 403);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Please Login First',
            ]);
        }
    }
}
