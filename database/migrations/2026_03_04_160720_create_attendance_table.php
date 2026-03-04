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
    Schema::create('attendance', function (Blueprint $table) {
        $table->id('attendance_id');
        $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
        $table->foreignId('lesson_id')->constrained('lessons', 'lesson_id')->cascadeOnDelete();
        $table->date('date');
        $table->string('status');
        $table->string('method')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
