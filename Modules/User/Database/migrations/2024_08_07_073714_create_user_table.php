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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['1','2','3','4','5','6','7'])->comment('1 is admin, 2 is doctor, 3 is labSupervisor, 4 is labAssistant, 5 is paharmacist, 6 is nurse, 7 is receptionist');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->enum('gender', ['M', 'F'])->comment('M is male and F is female');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
