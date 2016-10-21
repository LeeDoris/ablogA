<?php

namespace App\Http\Middleware;

use App\Http\Model\Navs;
use Closure;
use Menu;

class Menus
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


        $menu = Menu::make('MyNavBar', function($menu){
            $navs = Navs::all();
            foreach ($navs as $k=>$v){
            $menu->add($v->nav_name, $v->nav_url);
            }

        });
        return $next($request);
    }
}
