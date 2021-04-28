<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckAge
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
        $user = Auth::user();
        $result = DB::table('user_role')->where(array('user_id'=>$user->id,'role_id'=>2))->first();
        if(!$user) {
            return redirect('guest');
        }
        if ($result != null){
            return $next($request);
        }else{

            return redirect('404.index');
        }
        return $next($request);
    }
}
