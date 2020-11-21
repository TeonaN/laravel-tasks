<?php

namespace App\Http\Middleware;

use Closure;

use App\Products;

use Auth;

class CanPost
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
        $id = Auth::user()->id;
        if ($id!=Products::FirstOrFail()["user_id"]){
            return redirect->route("fail");
        }
        return $next($request);
    }
}
