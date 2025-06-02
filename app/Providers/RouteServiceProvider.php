<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = 'users/home';
    public const AdminDashboard = 'admin/dashboard';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        /// Rate limitting for storing Cart Item
        RateLimiter::for('order', function (Request $request) {
            return Limit::perMinute(10)->by($request->user()?->id ?: $request->ip())
            ->response(function (Request $request, array $headers) {
                return response()->json([
                    'message' => 'Too many requests. You get the Maximum.',
                    'retry_after' => $headers['Retry-After']
                ], 429);
            });
        });

        // rate limitting for login
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(4)->by($request->user()?->id ?: $request->ip()) 
            ->response(function (Request $request, array $headers) {
                return response()->json([
                    'message' => 'Too many requests. Please try again later.',
                    'retry_after' => $headers['Retry-After']
                ], 429);
            });
        });



        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['web','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
                ->prefix(LaravelLocalization::setLocale() . "/admin")
                ->name('admin.')
                ->group(base_path('routes/admin.php'));    
            });

            
    }


}
