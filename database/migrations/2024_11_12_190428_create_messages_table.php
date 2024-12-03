<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id'); // References Users table
            $table->unsignedBigInteger('recipient_id'); // References Users table
            $table->text('message');
            $table->timestamps();

            // Foreign Key Constraints
    $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');  
       
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
