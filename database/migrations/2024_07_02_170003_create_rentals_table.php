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
            $table->foreignId('bus_id');
            $table->foreignId('user_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('pickup_time')->nullable();
            $table->string('status')->default('pending'); // pending, approved, declined
            $table->string('payment_status')->default('unpaid'); // unpaid, paid
            $table->decimal('total_amount', 10, 2)->default(0.00);
            $table->string('pickup_location');
            $table->string('destination');
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
