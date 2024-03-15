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
        Schema::table('schedulers', function (Blueprint $table) {
            $table->string('border_colour')->default('#FBF0E9')->after('role_colour');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedulers', function (Blueprint $table) {
            $table->dropColumn('border_colour');
        });
    }
};
