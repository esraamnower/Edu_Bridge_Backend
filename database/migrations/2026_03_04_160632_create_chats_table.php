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
    Schema::create('chats', function (Blueprint $table) {
        $table->id('chat_id');
        // هون بنربط المرسل والمستقبل بنفس جدول المستخدمين
        $table->foreignId('sender_id')->constrained('users', 'user_id')->cascadeOnDelete();
        $table->foreignId('receiver_id')->constrained('users', 'user_id')->cascadeOnDelete();
        $table->text('content');
        $table->timestamp('sent_at')->useCurrent();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
