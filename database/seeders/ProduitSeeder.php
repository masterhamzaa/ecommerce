<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;
class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DEFAULT PRODUCTS
        Produit::create([
            'id' => 1,
            'categorie_id' => 1,
            'name' => 'MacBook Pro',
            'desc' => 'M2 Pro chip with 12‑core CPU and 19‑core GPU: 14.2-inch Liquid Retina XDR Display, 16GB Unified Memory, 1TB SSD Storage. Works with iPhone/iPad; Silver',
            'price' => 2447.50,
            'image' => 'https://m.media-amazon.com/images/I/61CHqS31PiL._AC_SX679_.jpg',
        ]);
        Produit::create([
            'id' => 2,
            'categorie_id' => 1,
            'name' => 'Apple 2020 MacBook Air Laptop M1 Chip',
            'desc' => '13" Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, FaceTime HD Camera, Touch ID. Works with iPhone/iPad; Space Gray',
            'price' => 681.99,
            'image' => 'https://m.media-amazon.com/images/I/71jG+e7roXL._AC_SX679_.jpg',
        ]);
    }
}
