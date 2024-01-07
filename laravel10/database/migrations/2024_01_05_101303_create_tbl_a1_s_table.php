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
        Schema::create('tbl_a1_s', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->integer('col_1');
            $table->integer('col_2');
            $table->integer('col_3');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_a1_s');
    }
};
