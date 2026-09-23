<?php

namespace Gegok12\HelloTeacher;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class HelloTeacherServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloTeacher');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        Route::middleware(['web', 'auth'])->group(function () {
            $this->registerAdminRoutes();
            $this->registerTeacherRoutes();
        });
    }

    private function registerAdminRoutes(): void
    {
        if (file_exists(__DIR__.'/../routes/admin.php')) {
            Route::middleware(['admin'])->prefix('admin')->group(
                __DIR__.'/../routes/admin.php'
            );
        }
    }

    private function registerTeacherRoutes(): void
    {
        if (file_exists(__DIR__.'/../routes/teacher.php')) {
            Route::middleware(['teacher'])->prefix('teacher')->group(
                __DIR__.'/../routes/teacher.php'
            );
        }
    }
}
