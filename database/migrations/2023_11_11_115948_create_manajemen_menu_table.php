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
        Schema::create('manajemen_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['menu', 'label']);
            $table->string('link');
            $table->integer('urutan');
            $table->integer('parent');
            $table->enum('notif', ['ENABLE', 'DISABLE']);
            $table->string('slug');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajemen_menu');
    }
};
