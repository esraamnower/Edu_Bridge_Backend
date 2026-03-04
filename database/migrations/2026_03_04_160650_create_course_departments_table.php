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
    Schema::create('course_departments', function (Blueprint $table) {
        $table->id('id');
        $table->foreignId('course_id')->constrained('courses', 'course_id')->cascadeOnDelete();
        $table->foreignId('department_id')->constrained('departments', 'department_id')->cascadeOnDelete();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_departments');
    }
};
