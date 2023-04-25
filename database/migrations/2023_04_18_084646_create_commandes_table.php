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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('idcommande');
            $table->string('uid');
            $table->integer('pid');
            $table->string('name');
            $table->string('desc');
            $table->float('price');
            $table->string('image')->nullable();
            $table->string('etatdecommande')->default('pasenprogress');
            $table->date('datedecommande')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
