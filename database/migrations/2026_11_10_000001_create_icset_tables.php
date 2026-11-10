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
        // 1. Conference Settings
        Schema::create('conference_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });

        // 2. Tracks
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // e.g. TRACK-01
            $table->string('title');
            $table->string('icon')->default('trending-up');
            $table->string('color')->default('emerald');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. Track Topics (Subtopics)
        Schema::create('track_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('track_id')->constrained('tracks')->cascadeOnDelete();
            $table->string('name');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // 4. Speakers
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('Invited Speaker'); // Keynote Speaker, Invited Speaker
            $table->string('name');
            $table->string('title')->nullable(); // e.g. CA, FCPA
            $table->string('institution')->nullable();
            $table->string('university')->nullable();
            $table->string('country')->nullable();
            $table->string('flag')->nullable(); // e.g. 🇧🇳
            $table->string('topic')->nullable();
            $table->string('status')->default('Confirmed'); // Confirmed, In Confirmation
            $table->string('image')->nullable();
            $table->text('bio')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 5. Timelines
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->string('date_string'); // e.g. 01 December 2026
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('badge')->default('Scheduled');
            $table->string('status')->default('upcoming');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 6. Registration Fees
        Schema::create('registration_fees', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('early_bird');
            $table->string('regular');
            $table->boolean('is_featured')->default(false);
            $table->json('features')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 7. Committees
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('division')->default('leadership'); // patron, leadership, academic_head, member
            $table->string('affiliation')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // 8. Participant Registrations
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number')->unique(); // e.g. ICSET27-A84K
            $table->string('full_name');
            $table->string('academic_title')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('institution');
            $table->string('country')->default('Indonesia');
            $table->string('category'); // Presenter (Local), Presenter (International), Student Presenter, Participant
            $table->foreignId('track_id')->nullable()->constrained('tracks')->nullOnDelete();
            $table->string('attendance_type')->default('onsite'); // onsite, online
            $table->string('paper_title')->nullable();
            $table->text('abstract')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('payment_status')->default('pending'); // pending, verified, rejected
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
        Schema::dropIfExists('committees');
        Schema::dropIfExists('registration_fees');
        Schema::dropIfExists('timelines');
        Schema::dropIfExists('speakers');
        Schema::dropIfExists('track_topics');
        Schema::dropIfExists('tracks');
        Schema::dropIfExists('conference_settings');
    }
};
