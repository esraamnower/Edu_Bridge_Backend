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
    Schema::create('exam_results', function (Blueprint $table) {
        $table->id('result_id');
        $table->foreignId('exam_id')->constrained('exams', 'exam_id')->cascadeOnDelete();
        $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
        $table->decimal('mark', 5, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
