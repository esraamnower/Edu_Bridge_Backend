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
    Schema::create('absence_requests', function (Blueprint $table) {
        $table->id('request_id');
        $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
        $table->date('date');
        $table->text('reason');
        $table->string('document')->nullable();
        $table->string('status')->default('pending');
        $table->foreignId('reviewed_by')->nullable()->constrained('users', 'user_id')->nullOnDelete();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absence_requests');
    }
};
