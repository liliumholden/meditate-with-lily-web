<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeditationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('meditations', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Meditation title
            $table->string('audio_path'); // path to meditation, youtube link?
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories table
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meditations');
    }
}

