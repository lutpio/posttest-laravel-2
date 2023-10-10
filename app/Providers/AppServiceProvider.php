<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // https://laravel-news.com/laravel-gates-policies-guards-explained
        Gate::define('participant', function(User $user){
            return $user->role === 'participant';
        });   
        Gate::define('super', function(User $user){
            return $user->role === 'super';
        });   
    }
}
