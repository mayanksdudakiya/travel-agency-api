<?php

namespace App\Providers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blueprint::macro('auditFields', function () {
            $this->bigInteger('created_by');
            $this->bigInteger('updated_by')->nullable();
            $this->timestamps();
        });
    }
}
