<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RouteNeedsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $role;
    private $path;
    public function handle(Request $request, Closure $next, $permission)
    {
        $this->role = auth()->user()->roles;
        $this->path = $request->path();
        if ($this->role[0]->name == 'User')
            return redirect()->route('frontend.home');

        if ($this->role[0]->name != 'Administrator') {
            if (strpos($this->path, 'admin') === 0) {
                // write code here to permission

            }
        }
        return $next($request);
    }
}
