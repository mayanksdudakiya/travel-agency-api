<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blueprint::macro('auditFields', function () {
            $this->foreignId('created_by')->constrained('users');
            $this->foreignId('updated_by')->nullable()->default(null)->constrained('users');
            $this->timestamps();
        });
    }
}
