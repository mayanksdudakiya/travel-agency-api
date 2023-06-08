<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->mediumText('description');
            $table->unsignedInteger('number_of_days');
            $table->boolean('is_public')->default(false);
            $table->auditFields();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};