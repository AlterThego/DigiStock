<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('population', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('count');
            $table->timestamps();

            $table->unsignedBigInteger('municipality_id');

            // Make sure the referenced column has the same data type and attributes
            $table->foreign('municipality_id')->references('id')->on('municipalities');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('population');
    }
};
