<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteSettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = SiteSetting::pluck('data', 'name');
        $categories = Category::where('status', '1')->withCount('items')->get(); // bütün veriler gelecek. foreach kullanmak lazım diğer tarafta.

        view()->share(['settings' => $settings, 'categories' => $categories]);
        return $next($request);
    }
}
