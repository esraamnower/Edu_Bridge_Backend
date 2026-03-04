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
    Schema::create('performance_reports', function (Blueprint $table) {
        $table->id('report_id');
        $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
        $table->decimal('attendance_rate', 5, 2);
        $table->decimal('average_grade', 5, 2);
        $table->text('recommendations')->nullable();
        $table->timestamp('generated_at')->useCurrent();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_reports');
    }
};
