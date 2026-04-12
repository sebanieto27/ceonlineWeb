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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            // Datos de contacto
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('units')->nullable();

            // Origen y tracking
            $table->enum('source', ['demo_form', 'contact_form', 'google_ads', 'meta_ads', 'linkedin', 'organic', 'referral', 'other'])->default('other');
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_content')->nullable();

            // Pipeline
            $table->enum('status', ['new', 'contacted', 'demo_scheduled', 'in_trial', 'negotiation', 'won', 'lost'])->default('new');
            $table->string('loss_reason')->nullable();

            // Asignación
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();

            // Extra
            $table->text('message')->nullable();
            $table->text('notes')->nullable();
            $table->string('subject')->nullable();

            $table->timestamp('first_contact_at')->nullable();
            $table->timestamp('last_contact_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
