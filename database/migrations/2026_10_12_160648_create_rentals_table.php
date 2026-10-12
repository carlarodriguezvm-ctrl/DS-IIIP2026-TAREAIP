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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignid(customer_id)->constrained('costumers')->onDelete('cascade');
            $table->foreignid(employee_id)->constrained(employees)->onDelete('cascade');
            $table->datetime('request_date');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->enum('status',['Pending','Active', 'Completed', 'Cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
