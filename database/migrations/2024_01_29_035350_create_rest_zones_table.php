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
        Schema::create('rest_zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->string('building');
            $table->string('image')->nullable();
            $table->decimal('geo_lat')->nullable();
            $table->decimal('geo_lng')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('telegram')->nullable();
            $table->string('over_social')->nullable();
            $table->text('description')->nullable();
            $table->text('apartment')->nullable();
            $table->text('food')->nullable();
            $table->text('service')->nullable();
            $table->text('beach')->nullable();
            $table->text('for_kids')->nullable();
            $table->text('sport')->nullable();
            $table->text('pool')->nullable();
            $table->text('spa')->nullable();
            $table->boolean('published_at')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rest_zones');
    }
};
