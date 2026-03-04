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
    Schema::create('lesson_materials', function (Blueprint $table) {
        $table->id('material_id');
        $table->foreignId('lesson_id')->constrained('lessons', 'lesson_id')->cascadeOnDelete();
        $table->string('type');
        $table->string('file_url');
        $table->boolean('available_offline')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_materials');
    }
};
