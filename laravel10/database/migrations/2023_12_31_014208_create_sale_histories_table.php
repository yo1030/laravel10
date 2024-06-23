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
        Schema::create('sale_histories', function (Blueprint $table) {
            $table->id();
            $table->date('sale_date');
            $table->unsignedInteger('quantity');
            $table->foreignId('item_no')
                ->references('item_no')
                ->on('sale_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_histories');
    }
};
