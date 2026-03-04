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
    Schema::create('students', function (Blueprint $table) {
        $table->id('student_id');
        $table->foreignId('user_id')->constrained('users', 'user_id')->cascadeOnDelete();
        $table->foreignId('parent_id')->nullable()->constrained('parents', 'parent_id')->nullOnDelete();
        $table->string('student_code')->unique();
        $table->string('level');
        $table->date('birth_date');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
