<?php namespace Bantenprov\RasioGMSmaMa\Http\Middleware;

use Closure;

/**
 * The RasioGMSmaMaMiddleware class.
 *
 * @package Bantenprov\RasioGMSmaMa
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmaMaMiddleware
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
        return $next($request);
    }
}
