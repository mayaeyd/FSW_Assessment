<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateRequestsNum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('id')){
            $user = User::find($request->user_id);

            $requestsCount = $user->requests_num ?? 0;
            $user->requests_num = $requestsCount+1;
            $user->save();
        }
        return $next($request);
    }
}
