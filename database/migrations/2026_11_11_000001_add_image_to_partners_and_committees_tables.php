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
        Schema::table('partners', function (Blueprint $table) {
            $table->string('logo_image')->nullable()->after('logo_abbr');
        });

        Schema::table('committees', function (Blueprint $table) {
            $table->string('image')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('committees', function (Blueprint $table) {
            $table->dropColumn('image');
        });

        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('logo_image');
        });
    }
};
