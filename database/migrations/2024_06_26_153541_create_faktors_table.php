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
        Schema::create('faktors', function (Blueprint $table) {
            $table->id();
            $table->integer('id_aspek');
            $table->string('faktor');
            $table->integer('target');
            $table->set('type', ['core', 'secondary']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faktors');
    }
};
