<?php

use App\Models\Produit;
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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId("categorie_id")->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('desc');
            $table->float('price');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        /* Produit::create([
            'id' => 1,
            'categorie_id' => 1,
            'name' => 'MacBook Pro',
            'desc' => 'M2 Pro chip with 12‑core CPU and 19‑core GPU: 14.2-inch Liquid Retina XDR Display, 16GB Unified Memory, 1TB SSD Storage. Works with iPhone/iPad; Silver',
            'price' => 2447.50,
            'image' => 'https://m.media-amazon.com/images/I/61CHqS31PiL._AC_SX679_.jpg',
        ]); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
