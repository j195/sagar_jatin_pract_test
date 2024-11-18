<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAppUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $setting = 1;
        if ($setting == 1) {
            $token = !empty($request->header('appaccesstoken')) ? $request->header('appaccesstoken') : null;
            if ($request->ajax() || empty($token) || $token != 'A7UVIN#3943=T@b^Nbdhb7s3Sf_v@Jatin') {
                return response()->json([
                            'success' => false,
                            'message' => 'Something went wrong.',
                            'code' => 401,
                            'result' => ''
                                ], 200);
            }
        return $next($request);
        }
    }
}
