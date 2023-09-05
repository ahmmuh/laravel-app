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
        Schema::create('privateservices', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('title2');
            $table->text('menyNamn');
            $table->text('description');
            $table->string('descriptionImage');
            $table->text('extra');
            $table->string('serviceImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privateservices');
    }
};
