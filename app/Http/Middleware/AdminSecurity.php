<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminSecurity
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

        /*
         *
         * BUAT MENGECEK USER ROLENYA
         *
         * */
        $result = DB::table('user')
            ->join('user_role','user.role_id','=','user_role.id')
            ->where('user.id','=',Auth::id())
            ->where('user_role.name','=','admin')
            ->first();
        if($result){
            return $next($request);
        }else{
            return redirect(env('APP_URL'));
        }

    }
}
