<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;
use Livewire\WithFileUploads;

class Import extends Component
{
    use WithFileUploads;
    public function render()
    {
        $produits = Produit::select('id', 'categorie_id', 'name', 'desc', 'price', 'image')->get();
        return view('livewire.import', compact('produits'));
    }
}
