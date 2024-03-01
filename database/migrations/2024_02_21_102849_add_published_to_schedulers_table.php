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
            $table->boolean('published')->nullable()->default(false)->after('shift_note');
            $table->boolean('accepted')->nullable()->default(true)->after('shift_note');
            $table->string('role_colour')->default('#FBF0E9')->after('shift_note');
            $table->string('frequency')->default('daily')->after('shift_note');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedulers', function (Blueprint $table) {
            $table->dropColumn('published');
            $table->dropColumn('accepted');
            $table->dropColumn('role_colour');
            $table->dropColumn('frequency');
        });
    }
};
