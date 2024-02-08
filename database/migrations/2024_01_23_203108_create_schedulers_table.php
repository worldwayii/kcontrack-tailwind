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
        Schema::create('schedulers', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('role')->nullable();
            $table->string('pay_rate', 10)->nullable();
            $table->string('break', 3)->nullable();
            $table->text('shift_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedulers');
    }
};
