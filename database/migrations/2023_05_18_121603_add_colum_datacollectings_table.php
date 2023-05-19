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
        Schema::table('datacollectings', function (Blueprint $table) {
//            $table->addColumn('integer','categories')->after('id');
//
//            $table->foreign('categories','datacollectings_category')->on('categories')->references('category');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('datacollectings', function (Blueprint $table) {
//            $table->dropColumn('datacollectings');
//        });
    }
};
