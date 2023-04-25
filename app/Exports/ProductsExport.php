<?php

namespace App\Exports;

use App\Models\Produit;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produit::select("id", "categorie_id", "name","desc","price","image")->get();
    }

    /**
     * Write code on Method
     *
     * @return \response
     */
    public function headings(): array
    {
        return ["id", "categorie_id", "name","desc","price","produit_image"];
    }
}
