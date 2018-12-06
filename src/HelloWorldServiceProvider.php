<?php

namespace Wisp1999\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //更改路由位置
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        //更改migrations位置
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        //更改view位置
        $this->loadViewsFrom(__DIR__ . '/views', 'HelloWorld');
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //註冊Controller
        $this->app->make(HelloWorldController::class);
    }
}
