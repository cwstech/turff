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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('customers', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('turff_id')->constrained('users', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('payment', 15);
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->integer('ammo');
            $table->text('note')->nullable();
            $table->integer('t_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
