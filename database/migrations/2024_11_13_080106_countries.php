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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name',length: 100);
            $table->string('code',length: 3)->unique();
            $table->timestamps();
        });

        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('adrress');
            $table->string('website');
            $table->string('phone',length: 12);            
            $table->integer('country_id')->unsigned();
            $table->string('ranking');
            $table->date('established_date');
            $table->longText('description');
            $table->string('facilities');
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name',length: 100)->unique();
            $table->string('type',length: 20);
            $table->timestamps();
        });

        Schema::create('university_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('universirt_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->float('fees', precision: 53);
            $table->date('intake');
            $table->string('duration');
            $table->string('scholarship');
            $table->string('entry_requirements');
            $table->string('language_requirements');
            $table->string('mode');
            $table->string('location');
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('universirt_id')->references('id')->on('universities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('universities');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('university_courses');
    }
};
