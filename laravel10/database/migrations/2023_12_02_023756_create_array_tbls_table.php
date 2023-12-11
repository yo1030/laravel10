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
        Schema::create('array_tbls', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->integer('col1')->nullable();
            $table->integer('col2')->nullable();
            $table->integer('col3')->nullable();
            $table->integer('col4')->nullable();
            $table->integer('col5')->nullable();
            $table->integer('col6')->nullable();
            $table->integer('col7')->nullable();
            $table->integer('col8')->nullable();
            $table->integer('col9')->nullable();
            $table->integer('col10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('array_tbls');
    }
};
