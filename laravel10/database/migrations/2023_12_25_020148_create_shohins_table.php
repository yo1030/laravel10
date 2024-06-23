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
        Schema::create('shohins', function (Blueprint $table) {
            $table->id();
            $table->string('shohin_id', 4)->unique();
            $table->string('shohin_mei');
            $table->string('shohin_bunrui');
            $table->integer('hanbai_tanka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shohins');
    }
};
