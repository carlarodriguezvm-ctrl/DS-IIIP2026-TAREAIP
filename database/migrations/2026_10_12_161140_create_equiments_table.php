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
        Schema::create('equiments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('equiment_code', 50)->unique();
            $table->text('descripction')->nullable();
            $table->string('brand', 100);
            $table->decimal('daily_rental_price', 10,2);
            $table->enum('status',['Available','Rented', 'Maintenace', 'Retired']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equiments');
    }
};
