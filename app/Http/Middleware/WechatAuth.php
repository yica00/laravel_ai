<?php

namespace App\Http\Middleware;

use Closure;

class WechatAuth
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
        if (empty(session('wechat_user'))) {
            session(['target_url' => url()->full() ]);
            $app = app('wechat');
            $response = $app->oauth->scopes(['snsapi_base'])
                ->redirect();
            return $response;
        }
        return $next($request);
    }
}
