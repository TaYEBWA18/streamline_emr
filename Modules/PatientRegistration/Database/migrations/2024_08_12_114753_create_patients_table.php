<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations for the patients database
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('First_name');
            $table->string('last_name');
            $table->enum('gender', ['M', 'F'])->comment('M is male and F is female');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('nok');
            $table->string('nok_phone_number');
            $table->enum('nok_relationship', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])->comment('1 is mother, 2 is father, 3 is son, 4 is daughter, 5 is spouse, 6 is friend, 7 is relative, 8 is other, 9 is brother, 10 is sister');
            $table->timestamps();
            $table->softDeletes(); // Soft delete for 'deleted_at' column to keep track of deleted records.
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
