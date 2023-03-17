<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug')->nullable()->unique();
            $table->text('description');
            $table->text('body');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->unsignedBigInteger('banner')->nullable();
            $table->boolean('registerable')->default(false);
            $table->boolean('enable_comments')->default(false);
            $table->integer('max_registrations')->default(0);
            $table->enum('status', ['draft', 'published', 'unlisted'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
