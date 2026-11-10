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
        // 1. Programme Sessions (Day 1 & Day 2 Rundown)
        Schema::create('programme_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('day')->default(1); // 1 = Day 1, 2 = Day 2
            $table->string('time_start'); // e.g. "08:00"
            $table->string('time_end')->nullable(); // e.g. "08:45"
            $table->string('time_label'); // e.g. "08:00 – 08:45 WIB"
            $table->string('badge')->default('Session'); // Opening, Keynote, Panel, Breakout, etc.
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location')->default('CBT Main Hall');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. FAQs
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->string('category')->default('General');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. Partners & Sponsors
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // indexing, university, sponsor
            $table->string('subtitle')->nullable(); // e.g. "Elsevier Database", "Brunei", "Official Banking Partner"
            $table->string('logo_abbr')->nullable(); // e.g. "Scopus", "BSI", "UBD"
            $table->string('color')->default('emerald'); // emerald, sky, indigo, amber, teal, rose
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('programme_sessions');
    }
};
