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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('producer')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('model_name')->nullable();
            $table->string('model_number')->nullable();
            $table->text('error')->nullable();
            $table->unsignedBigInteger('company_id')->default(1);
            $table->unsignedBigInteger('classroom_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
