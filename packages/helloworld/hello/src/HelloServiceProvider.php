<?php

namespace HelloWorld\Hello;
use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('HelloWorld\Hello\Controllers\HelloController');
        $this->app->make('HelloWorld\Hello\Models\User');

        $basePath = dirname(path:__DIR__);
        $arrPublishableFiles = [
            'migrations' => [
                "$basePath/src/migrations" => base_path('database/migrations'),
            ],
            'views' => [
                "$basePath/src/views" => base_path('resources/views'),
            ],
        ];
        foreach ($arrPublishableFiles as $groups => $paths) {
            $this->publishes($paths,$groups);
        }


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'hello');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/lang', 'hello');
        // $this->publishes([
        //     __DIR__.'/config/hello.php' => config_path('hello.php'),
        // ]);
    }
}
