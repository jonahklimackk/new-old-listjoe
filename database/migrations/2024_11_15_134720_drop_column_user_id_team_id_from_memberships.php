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
        Schema::table('memberships', function (Blueprint $table) {
           $table->dropColumn('user_id');
           $table->dropColumn('team_id');
           $table->dropColumn('role');

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('memberships', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('team_id');
            $table->string('role');

        });
    }
};
