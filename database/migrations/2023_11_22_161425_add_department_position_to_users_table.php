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
        Schema::table('users_backoffices', function (Blueprint $table) {
            $table->unsignedBigInteger('department')->nullable()->after('second_lastname');
            $table->foreign('department') -> references('id') -> on('departments');
            $table->unsignedBigInteger('position')->nullable()->after('second_lastname');
            $table->foreign('position') -> references('id') -> on('positions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_backoffices', function (Blueprint $table) {
            $table->dropForeign(['department']);
            $table->dropColumn('department');
            $table->dropForeign(['position']);
            $table->dropColumn('position');
        });
    }
};
