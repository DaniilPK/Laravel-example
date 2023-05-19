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
        Schema::create('datacollectings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->references('id')->on('categories');


            $table->string('name');
            $table->bigInteger('price');
            $table->timestamps();

            $table->softDeletes();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacollectings');
    }
};
