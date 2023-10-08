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
        Schema::create('volunteer_hours', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->unsignedBigInteger('service_type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('description');
            $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_hours');
    }
};
