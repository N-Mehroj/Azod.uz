<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reply_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->integer('reply_messageId');
            $table->integer('like_count')->nullable()->default(0);
            $table->integer('report_count')->nullable()->default(0);
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_messages');
    }
};
