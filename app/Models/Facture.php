<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','commanderef', 'client_id','client_name', 'produits','ttc','datedefacture'
    ];

}
