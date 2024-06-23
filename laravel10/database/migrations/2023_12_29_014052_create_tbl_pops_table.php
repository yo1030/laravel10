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
        Schema::create('tbl_pops', function (Blueprint $table) {
            $table->id();
            $table->string('pref_name');
            $table->unsignedInteger('age_class');
            $table->char('sex_cd', 1);
            $table->unsignedInteger('population');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pops');
    }
};
