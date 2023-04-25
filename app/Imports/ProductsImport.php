<?php

namespace App\Imports;

use App\Models\Produit;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produit([
            'categorie_id'    => $row['categorie_id'],
            'name'    => $row['name'],
            'desc'    => $row['desc'],
            'price'    => $row['price'],
            'image'    => $row['image'],

        ]);
    }
}
