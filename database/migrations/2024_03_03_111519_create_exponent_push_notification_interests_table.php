<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('create_exponent_push_notification_interests', function (Blueprint $table) {
            $table->string('key')->index();
            $table->string('value');

            $table->unique(['key','value']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('create_exponent_push_notification_interests');
    }
};
