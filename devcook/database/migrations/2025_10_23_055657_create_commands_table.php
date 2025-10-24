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
    Schema::create('commands', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // misalnya "Install Laravel"
        $table->string('category')->nullable(); // misalnya "Laravel", "React", "Node"
        $table->text('description')->nullable(); // penjelasan singkat
        $table->longText('command_text'); // isi syntax terminal
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
