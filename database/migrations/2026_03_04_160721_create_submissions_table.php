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
    Schema::create('submissions', function (Blueprint $table) {
        $table->id('submission_id');
        $table->foreignId('assignment_id')->constrained('assignments', 'assignment_id')->cascadeOnDelete();
        $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
        $table->string('file_url');
        $table->timestamp('submitted_at')->useCurrent();
        $table->decimal('grade', 5, 2)->nullable();
        $table->text('feedback')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
