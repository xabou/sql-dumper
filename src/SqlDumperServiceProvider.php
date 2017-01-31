<?php

namespace Xabou\SqlDumper;

use Illuminate\Support\ServiceProvider;

class SqlDumperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') == 'production') {
            return;
        }

        $this->publishes([__DIR__ . '/../config/sql-dumper.php' => config_path('sql-dumper.php')], 'sql-dumper-config');

        $this->app->make('SqlDumper')->render();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') == 'production') {
            return;
        }

        $this->app->singleton('SqlDumper', function () {
            return new SqlDumper();
        });

    }

}