<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ClearStorage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Artisan::call('cache:clear');
        Artisan::call('storage:link');

        $file = new Filesystem;
        $file->deleteDirectories(storage_path('app/public'));

        return $next($request);
    }
}
