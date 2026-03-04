<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('course_teachers', function (Blueprint $table) {
        $table->id('course_teacher_id');
        $table->foreignId('course_id')->constrained('courses', 'course_id')->cascadeOnDelete();
        $table->foreignId('teacher_id')->constrained('teachers', 'teacher_id')->cascadeOnDelete();
        $table->string('role');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_teachers');
    }
};
